<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentUser;
use App\Models\CourseBook;
use App\Models\Course;
use App\Models\Event;
use Carbon\Carbon;

class AdminController extends Controller
{

    const MONDAY = 'Mon';
    const TUESDAY = 'Tue';
    const WEDENSDAY = 'Wed';
    const THURSDAY = 'Thu';
    const FRIDAY = 'Fri';
    const SATURDAY = 'Sat';
    const SUNDAY = 'Sun';


    public function index()
    {


        $teacher = User::role('teacher')->get();
        $students = StudentUser::where('is_evaluated', 1)
            // ->where('evaluator_user_id', 1)
            ->get();
        $courses = Course::where('user_id', 3) // Hardcoded now //TODO need to remove the hardcoe
            ->get();
        if (empty($courses[0]))
            return redirect('/admin/users/create-course/')->with('success', "Classes Created");
        $data = [
            'teacher' => $teacher,
            'students' => $students,
            'courses' => $courses,
        ];
        return view('users.classes', [
            'data' => $data
        ]);
    }


    /**
     * @param Request $request
     *
     * @return [type]
     * Create Classes for the specified teacher and student
     */
    public function manageStore(Request $request)
    {

        $studentEmail = $request->student;
        $teacherEmail = $request->teacher;
        $selectDays = $request->daysOfWeek;
        $CourseName = $request->course_name;
        $teacherObj = User::where('email', $teacherEmail)->first();
        $studentObj = StudentUser::where('email', $studentEmail)->first();

        $coursesObj = DB::table('courses')
            ->select(
                'courses.id',
                'courses.course_book_id',
                'courses.user_id',
                'courses.program_name',
                'courses.total_no_of_classes',
                'courses.description',
                'course_book.start_date',
                'course_book.end_date',
            )

            ->join('course_book', 'course_book.id', '=', 'courses.course_book_id')
            ->where('courses.user_id', $teacherObj->id)
            ->where('courses.program_name', $CourseName)
            ->get();

        foreach ($coursesObj as $course) {
            $classesObj = Classes::where('student_user_id', $studentObj->id)
                ->where('course_id', $course->id)
                ->get();
            if (empty($classesObj[0])) {
                $classesObject = Classes::create(
                    [
                        'student_user_id' => $studentObj->id,
                        'course_id' => $course->id,
                        'days_of_week' => $selectDays,
                        'description' => $course->description,
                        'start_date' => $course->start_date,
                        'end_date' => $course->end_date,
                    ]
                );
            } else {
                $classID = $classesObj[0]['id'];
                $classesObject = Classes::find($classID);
                $classesObject->days_of_week = $selectDays;
                $classesObject->start_date = $course->start_date;
                $classesObject->end_date = $course->end_date;
                $classesObject->save();
            }
            $eventDates = array();
            foreach (explode(",", $classesObject->days_of_week)  as $weekDay) {
                $startDate = $this->customReFormatDate($classesObject->start_date);
                $endDate = $this->customReFormatDate($classesObject->end_date);
                $eventDates[]  = $this->getDaysInBetween($startDate, $endDate, strtolower($weekDay));
            }
            foreach ($eventDates as $event) {
                foreach ($event as $eventDate) {
                    $createEvent = Event::create(
                        [
                            'title' => $course->program_name,
                            'user_id' => $teacherObj->id,
                            'student_id' => $studentObj->id,
                            'start' => $eventDate . " 08:00:05",
                            'end' => $eventDate . " 09:00:05",
                        ]
                    );
                }
            }
        }
        return redirect('/admin/users/manage-classes/')->with('success', "Classes Created");
    }

    /**
     * @return [type]
     *To create a course.
     */

    public function createCourse()
    {

        $teacher = User::role('teacher')->get();

        $data = [
            'teacher' => $teacher,
            // 'students' => $students,
            // 'courses' => $courses,
        ];
        return view('users.createcourse', [
            'data' => $data
        ]);
    }

    public function createStore(Request $request)
    {


        // $request->validate([
        //     'name' => 'required|unique:users,name'
        // ]);

        //  dd($request);
        $input = $request->all();
        // $validated = $request->validate([
        //     'program_name' => 'required|min:10|max:100',
        //     'description' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'user_id' => 'required',
        // ]);
        // dd('reached');

        // TODO Need to implement the transaction here
        DB::transaction(
            function () use ($request) {
                //  dd($request);
                //  dd($request->end_date);
                $courseBook = CourseBook::create(
                    [

                        'user_id' => $request->user_id,
                        'program_name' => $request->program_name,
                        'description' => $request->description,
                        'no_of_classes' => $request->no_of_classes,
                        'start_date' => $request->start_date,
                        'end_date' => $request->end_date,
                    ]
                );
                $course = Course::create(
                    [
                        'course_book_id' => $courseBook->id,
                        'user_id' => $request->user_id,
                        'program_name' => $request->program_name,
                        'description' => $request->description,
                        'total_no_of_classes' => $request->no_of_classes,
                    ]
                );
            }
        );
        return redirect('/admin/users/manage-classes/')->with('success', "Classes Created");
    }

    /**
     *
     * display the screenusers report to the admin
     * @return [type]
     */
    public function screenReport(Request $request)
    {


        $params = explode("/", $request->path());
        $studentId = $params[4];
        $adminId = $params[4];



        // $admin = $users = User::role('admin');


        $studentList = DB::table('student_evaluation')
            ->select(
                'student_users.id',
                'student_users.name',
                'student_users.username',
                'student_users.email',
                'student_users.program_name',
                'student_users.is_active',
                'student_evaluation.comment'
            )

            ->join('student_users', 'student_users.id', '=', 'student_evaluation.student_user_id')
            ->where('student_users.id', $studentId)
            ->get();


        $data = $studentList[0];
        return view('users.screenreport', [
            'data' => $data
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



    /** Custom Dates */
    // $weekday, $dateFromString, $dateToString, $format = 'Y-m-d'
    public function getDaysInBetween($dateFromString, $dateToString, $weekDay)
    {
        $dateFrom = new \DateTime($dateFromString);
        $dateTo = new \DateTime($dateToString);
        $dates = [];

        if ($dateFrom > $dateTo) {
            return $dates;
        }

        if (1 != $dateFrom->format('N')) {
            $dateFrom->modify('next ' . $weekDay);
        }

        while ($dateFrom <= $dateTo) {
            $dates[] = $dateFrom->format('Y-m-d');
            $dateFrom->modify('+1 week');
        }

        return $dates;
    }

    public function customReFormatDate($date)
    {

        $orgDate = explode("-", $date);
        $temp = $orgDate[1];
        $orgDate[1] = $orgDate[2];
        $orgDate[2] = $temp;
        return join("-", $orgDate);
    }
    /** Custom Dates */
}
