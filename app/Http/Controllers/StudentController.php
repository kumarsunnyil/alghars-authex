<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseBook;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\StudentUser;
use App\Models\User;
use Spatie\Permission\Models\Role;

class StudentController extends Controller
{

    /**
     * display and display all students
     */
    public function fetchAllStudents(StudentUser $user)
    {



        if (auth()->user()->hasRole('teacher')) {
            $courses = DB::table('users')
                ->select(
                    'users.id', 'users.name', 'classes.student_user_id',
                    'student_users.id', 'student_users.name',
                    'student_users.email', 'student_users.username',
                    'student_users.program_name', 'student_users.is_active'
                    )
                ->join('courses', 'courses.user_id', '=', 'users.id')
                ->join('classes', 'classes.course_id', '=', 'courses.id')
                ->join('student_users', 'student_users.id', '=', 'classes.student_user_id')
                ->where(['users.id' => auth()->user()->id])
                ->get();
                $students = array();
            foreach ($courses as $course) {
                $students [] = $course;
            }
        }
        if (auth()->user()->hasRole('screenuser')) {

            $students = DB::table('users')
                ->select(
                    'users.id', 'users.name',
                    'student_users.id', 'student_users.name',
                    'student_users.email', 'student_users.username',
                    'student_users.program_name', 'student_users.is_active'
                    )
                ->join('student_evaluation', 'student_evaluation.user_id', '=', 'users.id')
                ->join('student_users', 'student_users.id', '=', 'student_evaluation.student_user_id')
                ->where(['users.id' => auth()->user()->id])
                ->get();

        }
        if (auth()->user()->hasRole('admin')) {
            //student_evaluation
            $students = StudentUser::all();
        }
        if (auth()->user()->hasRole('student')) {
            return view('users.student-denied', [
                'students' => $students
            ]);

        }

        return view('users.students', [
            'students' => $students
        ]);
    }
}
