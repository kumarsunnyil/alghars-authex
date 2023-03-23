<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\StudentUser;

class StudentController extends Controller
{
    //

        /**
     * display and display all students
     */
    public function fetchAllStudents(StudentUser $user) {

// dd($user);
$students = StudentUser::all();

return view('users.students', [
    'students' => $students
]);
        // return view('users.students', [
        //     'user' => $user
        // ]);
        // $pagination = StudentUser::latest()->paginate(10);
        // $students = StudentUser::all();

        // $stTable = (new StudentUser())->getTable(); // This will get the table name
        // $students = DB::table($stTable)->get();

        // dd($students);

        // return view('users.index', compact('users'));
    }
}
