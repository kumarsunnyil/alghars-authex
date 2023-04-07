<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use \App\Models\StudentEvaluation;
use App\Models\StudentUser;
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

        // $currentStudentId =  Auth::user()->id;
        // $user = User::find($currentStudentId);
        // // echo $user->email;
        // $student = StudentUser::where('email', $user->email)->first();
        // $evaluation = StudentEvaluation::where('student_user_id', $student->id)->first();

        return view('layouts.calendar.create');
    }

    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function confirmEvaluatorStore(Request $request)
    {

        $token = $request->session()->token();
        $token = csrf_token();
        $studentId = Auth::user()->id;
        $currentStudentId =  Auth::user()->id;
        $user = User::find($currentStudentId);
        $student = StudentUser::where('email', $user->email)->first();
        DB::table('student_evaluation')
        ->where('student_user_id', $student->id)
        ->update(['evaluated_date' => $request->confirmDateAndtime]);

        //TODO
        // Add Event here and send email to the screenuser
        return redirect("/student/$studentId/calendar")->with('success', "Student has Confirms Date.");
    }


    /**
     * @param Request $request
     *
     * @return [type]
     */
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
