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

class AdminController extends Controller
{
    public function index()
    {


        $teacher = User::role('teacher')->get();
        $students = StudentUser::where('is_evaluated', 1)
            // ->where('evaluator_user_id', 1)
            ->get();
        $courses = Course::where('user_id', 3) // Hardcoded now //TODO need to remove the hardcoe
            ->get();
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
        $coursesObj = Course::where('program_name', $CourseName)->get();
        foreach ($coursesObj as $course) {
            $classesObj = Classes::where('student_user_id', $studentObj->id)
                ->where('course_id', $course->id)
                ->get();
                if (empty($classesObj[0])) {

                    $class = Classes::create(
                        [

                            'student_user_id' => $studentObj->id,
                            'course_id' => $course->id,
                            'days_of_week' => $selectDays,
                            'description' => '',
                            'start_date' => now(),
                            'end_date' => now(),
                            ]
                        );
                    } else {
                $classID = $classesObj[0]['id'];
                $classesObject = Classes::find($classID);
                                 //->where('student_user_id', $studentObj->id);
                $classesObject->days_of_week = $selectDays;
                $classesObject->save();
            }
        }
        return redirect('/admin/users/manage-classes/')->with('success', "Classes Created");
    }

    /**
     * @return [type]
     *To create a course.
     */

    public function createCourse() {

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

    public function createStore (Request $request) {


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
        {
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
            // dd($courseBook);
        $course = Course::create(
            [
                'course_book_id'=> $courseBook->id,
                'user_id' => $request->user_id,
                'program_name' => $request->program_name,
                'description' => $request->description,
                'total_no_of_classes' => $request->no_of_classes,
                ]
            );
        };
            return redirect('/admin/users/manage-classes/')->with('success', "Classes Created");

    }
}
