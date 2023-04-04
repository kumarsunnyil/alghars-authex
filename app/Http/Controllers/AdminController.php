<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentUser;
use App\Models\CourseBook;
use App\Models\Course;

class AdminController extends Controller
{
    public function index()
    {


        $teacher = $users = User::role('teacher')->get();
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

            // dd($data);
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
    public function manageStore(Request $request) {

        //  dd($request);
         $studentEmail = $request->student;

        $teacherEmail = $request->teacher;
        $selectDays = $request->daysOfWeek;
        $CourseName = $request->course_name;

        $teacherObj = User::where('email', $teacherEmail)->first();
        $studentObj = StudentUser::where('email', $studentEmail)->first();

        // dd($studentObj);
        $coursesObj = Course::where ('program_name', $CourseName)->get();

        foreach($coursesObj as $course) {

            $class = Classes:: create([

                'student_user_id'=> $studentObj->id,
                'course_id'=> $course->id,
                'days_of_week'=> $course->id,
                'description'=> '',
                'start_date'=> now(),
                'end_date'=> now(),
                ]
            );

        }

        return redirect('/admin/users/manage-classes/')->with('success', "Classes Created");
    }
}
