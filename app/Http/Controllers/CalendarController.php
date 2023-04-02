<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use \App\Models\StudentEvaluation;
use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    /**
     * Calendar
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /**
         * Get Evaluation Information
  select su.id, su.name, se.student_user_id, u.name  from student_users su
  INNER JOIN student_evaluation se on  se.student_user_id = su.id
  INNER JOIN users u on  u.id = se.user_id
   where su.id = 8  and
   su.is_evaluated = 0
  ;
         */




        // get the information of the screen user.

//working
        // $student =  DB::table('student_evaluation')
        // ->join('users', 'student_evaluation.user_id', '=', 'users.id' )

        // //  -> where('student_users.is_evaluated', 0)
        // -> where('student_evaluation.student_user_id',  8)
        // ->get();

        // Query
        // need to query if the users is not evaluated.

        $student =  DB::table('student_users')
        ->join('users', 'student_user_id', '=', 'student_users.id' )

      //  -> where('student_users.is_evaluated', 0)
        -> where('student_evaluation.student_user_id',  8)
        -> where('student_evaluation.student_user_id',  8)
        ->get();

        dd('query');




        // dd($student->name);
        dd($student);
        // -> where('student_users.is_evaluated', 0);
        // $student = User::where('id', Auth::user()->id)->first();
        // $currentStudent = StudentUser::find($studentUser->id);


        return view('layouts.calendar.create');
    }

    public function confirmEvaluatorStore(Request $request)
    {

        $studentId = Auth::user()->id;
        DB::table('student_evaluation')
        ->where('student_user_id', $studentId)->update(['evaluated_date' => $request->confirmDateAndtime]);
        return redirect("/student/$studentId/calendar")->with('success', "Student has Confirms Date.");
    }
    public function screenEvaluation(Request $request)
    {
        /**
         * Pick the Students Evaluation Meeting with the ScreenUser.
         * User::select('users.*')
         * ->join('posts', 'posts.user_id', '=', 'users.id')
         * ->join('comments', 'comments.post_id', '=', 'posts.id');

         */


        $screenUser = User::where('email', $request->screenuser)->first();
        // dd('in the confirmation controller');
    }
}
