<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\StudentUser;

class StudentController extends Controller
{

    /**
     * display and display all students
     */
    public function fetchAllStudents(StudentUser $user)
    {
        $students = StudentUser::all();
        return view('users.students', [
            'students' => $students
        ]);
    }


}
