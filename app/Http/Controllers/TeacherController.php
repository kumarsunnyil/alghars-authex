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
        if (!is_null($courseBookObject)) {

            return view('teacher.newclasses', [
                //'data' => $highlightDays
            ]);
        }
        return view('teacher.emptyclasses', [
            'data' => 'You have no classes Scheduled'
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
