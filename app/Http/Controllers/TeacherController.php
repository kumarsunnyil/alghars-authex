<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \app\Models\User;
use \app\Models\StudentUser;
// use \app\Models\StudentEvaluation;
use \App\Models\StudentEvaluation;


use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function fetchStudentInEvaluation() {
        $teacherId =  Auth::user()->id;

        // $studentsForEvaluation = StudentEvaluation::where('user_id', $teacherId)->get();
        //dd($studentsForEvaluation);
    }
}
