<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Models\User;
use \App\Models\StudentUser;
use \App\Models\StudentEvaluation;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ScreenuserController extends Controller
{
    /**
     * Fetch students
     */
    public function fetchScreenusers()
    {
        //fetch screen users
        $screenuser = $users = User::role('screenuser')->get();

        $students = StudentUser::where('is_evaluated', 0)
            ->where('evaluator_user_id', 1)
            ->get();
        $data = [
            'screenuser' => $screenuser,
            'students' => $students
        ];

        return view('users.screenuser', [
            'data' => $data
        ]);
    }

    /**
     * Assign an evaluator / screenuser to
     * single or multiple students this is
     * done by the Admin of the application
     */

    public function assignEvaluatorStore(Request $request)
    {

        //dd('Here');
        // dd($request->studentThrottle);
        $screenUser = User::where('email', $request->screenuser)->first();
        foreach (explode(',', $request->studentThrottle) as $studentEmail) {
            //$studentUser = StudentUser::where('email', $studentEmail)->first();
            $studentUser = StudentUser::where('email', $studentEmail)->first();
            $evaluation = StudentEvaluation::create(
                [
                    'user_id' => $screenUser->id,
                    'student_user_id' => $studentUser->id,
                ]
            );

            $currentStudent = StudentUser::find($studentUser->id);
            $currentStudent->evaluator_user_id = $screenUser->id;
            $currentStudent->save();
        }
        return redirect('/admin/assign/screenuser/students')->with('success', "Student has been assigned to screenUser->name.");
    }
    public function fetchStudentInEvaluation()
    {

        $screenUserId =  Auth::user()->id;
        $evaluation = StudentEvaluation::where('user_id', $screenUserId)->get();
        // dd($evaluation);
        foreach ($evaluation as $evaluating) {
            $currentStudent = StudentUser::find($evaluating->student_user_id);
            $students[] = [

                'id' => $currentStudent->id,
                'screenUserId' => $screenUserId,
                'name' => $currentStudent->name,
                'parent_name' => $currentStudent->p_name,
                'program_name' => $currentStudent->program_name,
                'location' => $currentStudent->location,
                'grade' => $currentStudent->grade,
            ];
        }

        return view('users.evaluatestudent', [
            'students' =>  $students
        ]);
    }

    /**
     * display and Individual students
     */
    public function fetchStudentInfo(Request $request)
    {
        $params = explode("/", $request->path());

        $studentId = $params[3]; // from the URI params
        $student = StudentUser::find($studentId);
        return view('users.studentinfo', [
            'student' => $student
        ]);
    }
    /**
     * Submit form
     * @param Request $request
     *
     * @return [type]
     */
    public function evaluationSubmission(Request $request)
    {

        $params = explode("/", $request->path());

        $studentId = $params[4]; // from the URI params
        $student = StudentUser::find($studentId);

        return view('users.evaluateForm', [
            'student'  => $student
        ]);
    }
    /**
     * Subit the Evaluation report
     * @param Request $request
     *
     * @return [type]
     */
    public function submitEvaluation(Request $request) {


        // dd($request->email);
        $student = StudentUser::where ('email', $request->email)->first();
        // dd($student);
        $evaluationObj = StudentEvaluation :: where ('student_user_id', $student->id)->first();
// dd($evaluationObj);

        $evaluationObj->comment = $request->comment;
        $evaluationObj->save();
        return redirect('/admin/')->with('success', "Student Report Submitted.");



    }
}
