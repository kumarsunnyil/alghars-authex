<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use \app\Models\User;
use \app\Models\StudentUser;

use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;


use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * @return [type]
     */
    public function fetchStudentInEvaluation()
    {
        $teacherId =  Auth::user()->id;
    }

    /**
     * Fetch all the classes for the teacher
     * @return [type]
     */
    public function fetchAllClasses()
    {
        $teacherId =  Auth::user()->id;


        $courseBookObject = DB::table('course_book')->where('user_id', $teacherId)->first();
        $courseObject = DB::table('courses')
            ->where('user_id', $teacherId)
            ->where('course_book_id', $courseBookObject->id)
            ->first();

        $classesObject = DB::table('classes')
            ->where('course_id', $courseObject->id)
            ->first();
        $highlightDays = explode(",", $classesObject->days_of_week);


        $userObject = DB::table('student_users')
            ->where('id', $classesObject->id)
            ->first();



        $count = 0;
        $currentDate = '';
        $previousDayCount = 0;
        $comingDaysForWeek = array();
        $data = [];
        foreach ($highlightDays as $weekDay) {

            if ($count == 0) {

                $currentDate = $this->getSelectedDates($weekDay);
                $tempDate = $currentDate;
                $currentWeekDayCount = $this->weekdayCount($weekDay);
                $previousDayCount = $currentWeekDayCount;
                array_push($comingDaysForWeek, $currentDate);
            } else {

                $currentWeekDayCount = $this->weekdayCount($weekDay);
                $newDate =   $this->calculateNextDate($currentDate, $currentWeekDayCount, $previousDayCount);
                $tempDate = $newDate;
                array_push($comingDaysForWeek, $newDate);
                $currentDate = $newDate;
                $previousDayCount = $currentWeekDayCount;
            }
            $count++;
            $tempDate . " Here ";
            $displayDate = explode("-", $tempDate);
            //create Object
            $data[$count]  = array(
                'title' => $courseObject->program_name,
                'start' => 'y', ($displayDate[1] - 1), $displayDate[2], 12, 30,
                'allDay' => false,
                'backgroundColor' => '#0073b7', //Blue
                'borderColor' => '#0073b7' //Blue
            );
            // echo "<br>";
        }
        //    dd(json_encode($data));

        // dd('format');

        // format the data object

        /**
         *
         *                   {
                        title: 'Meeting Fixed',
                        start: new Date(y, 1, 19, 12, 30),
                        allDay: false,
                        backgroundColor: '#0073b7', //Blue
                        borderColor: '#0073b7' //Blue
                    }
         *
         *
         */
dd($highlightDays);

        $data = [
            'classDays' => $highlightDays,
            'user' => $userObject,
            'classDates' => $comingDaysForWeek
        ];

        return view('teacher.classes', [
            'data' => $highlightDays
        ]);
    }
    /**
     * @param mixed $weekDay
     *
     * @return [type]
     */
    public function getSelectedDates($weekDay)
    {

        return date('Y-m-d', strtotime('next ' . $weekDay));
    }

    /**
     * @param mixed $weekday
     *
     * @return [type]
     */
    public function weekdayCount($weekday)
    {

        $week = array(
            "1" => "Sunday",
            "2" => "Monday",
            "3" => "Tuesday",
            "4" => "Wednesday",
            "5" => "Thursday",
            "6" => "Friday",
            "7" => "Saturday"
        );
        return array_search($weekday, $week);
    }

    /**
     * @param mixed $givenDate
     * @param mixed $currentWeekDayCount
     * @param mixed $previousDayCount
     *
     * @return [type]
     */
    public function calculateNextDate($givenDate, $currentWeekDayCount, $previousDayCount)
    {
        // $givenDate = "2022-01-31";

        $timestampForGivenDate = strtotime($givenDate);
        // $englishText7 = '+7 day';
        $englishText7 = '+' . ($currentWeekDayCount - $previousDayCount) . ' day';
        $requireDateFormat = "Y-m-d";
        $nextDate = date($requireDateFormat, strtotime($englishText7, $timestampForGivenDate));
        return $nextDate;
    }

    public function AllStudentFeedback()
    {
        return view('teacher.feedback');
    }
}
