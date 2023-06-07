<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Models\User;
use \App\Models\StudentUser;
use \App\Models\StudentEvaluation;

use App\Events\StudentEvaluated;

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
     * @return [type]
     */
    public function viewEvaluator()
    {

        $screenuser = $users = User::role('screenuser')->get();

        foreach ($screenuser as $user) {
            //$user
            //             dd($user->name);
            $studentList = DB::table('student_evaluation')
                ->select(
                    'student_users.id',
                    'student_users.name',
                    'student_users.username',
                    'student_users.email',
                    'student_users.program_name',
                    'student_users.is_active',
                    'student_evaluation.comment',
                    'users.email as s_email',
                    'users.id as sUsersId'
                )

                ->join('student_users', 'student_users.id', '=', 'student_evaluation.student_user_id')
                ->join('users', 'student_users.email', '=', 'users.email')
                ->where('user_id', $user->id)
                ->get();
            $evaluatedStudentDetails = array();
            foreach ($studentList as $student) {

                $evaluatedStudentDetails[$user->name][] = array(
                    "studentId" => $student->id,
                    "studentName" => $student->name,
                    "studentUserName" => $student->username,
                    "studentUserTableID" => $student->sUsersId,
                    "studentEmail" => $student->email,
                    "studentIsActive" => $student->is_active ? "Yes" : "No",
                    "evaluated" => (!is_null($student->comment) === false) ? "Pending" : "Evaluated",
                );
            }
        }
        return view('users.evaluated', [
            'mapped' => $evaluatedStudentDetails
        ]);
    }

    /**
     * Assign an evaluator / screenuser to
     * single or multiple students this is
     * done by the Admin of the application
     */

    public function assignEvaluatorStore(Request $request)
    {
        $screenUser = User::where('email', $request->screenuser)->first();
        foreach (explode(',', $request->studentThrottle) as $studentEmail) {
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
        $evaluation = StudentEvaluation::where('user_id', $screenUserId)
            ->get();
        $students = array();
        foreach ($evaluation as $evaluating) {
            $currentStudent = StudentUser::find($evaluating->student_user_id);
            if ($currentStudent->is_evaluated == 0) {

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

        $screenUserId =  Auth::user()->id;
        $evaluation = StudentEvaluation::where('user_id', $screenUserId)
            ->where('student_user_id', $studentId)
            ->get();
        $date = '';
        foreach ($evaluation as $evaluating)
            $date = str_replace("/", ":", $evaluating->evaluated_date);

        $student = StudentUser::find($studentId);
        return view('users.studentinfo', [
            'evaluationDate' => $date,
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
    public function submitEvaluation(Request $request)
    {
//  dd($request);
        $student = StudentUser::where('email', $request->email)->first();
        $evaluationObj = StudentEvaluation::where('student_user_id', $student->id)->first();

        $evaluationObj->target_material = $request->target_material;
        $evaluationObj->distinguish_alphabet = $request->distinguish_alphabet=='ON'?1:0;
        $evaluationObj->distinguish_sight_words = $request->distinguish_sight_words=='ON'?1:0;
        $evaluationObj->word_saturation = $request->word_saturation=='ON'?1:0;
        $evaluationObj->distinguish_short_long_runs = $request->distinguish_short_long_runs=='ON'?1:0;
        $evaluationObj->practice_connecting_words = $request->practice_connecting_words=='ON'?1:0;
        $evaluationObj->arabic_language_vocabulary = $request->arabic_language_vocabulary=='ON'?1:0;
        $evaluationObj->practice_reading_by_time = $request->practice_reading_by_time=='ON'?1:0 ;
        $evaluationObj->reading_and_distinction = $request->reading_and_distinction== 'ON'?1:0 ;
        $evaluationObj->reinforcing_reading_comprehension = $request->reinforcing_reading_comprehension=='ON'?1:0;
        $evaluationObj->extract_main_idea = $request->extract_main_idea=='ON'?1:0;
        $evaluationObj->speaking_grammar_principles = $request->speaking_grammar_principles=='ON'?1:0;
        $evaluationObj->alphabet_distinguishing = $request->alphabet_distinguishing=='ON'?1:0;
        $evaluationObj->distinguishing_homonyms = $request->distinguishing_homonyms=='ON'?1:0;
        $evaluationObj->distinguishing_sight_words = $request->distinguishing_sight_words=='ON'?1:0;
        $evaluationObj->rid_of_word_saturation = $request->rid_of_word_saturation=='ON'?1:0;
        $evaluationObj->short_long_runs = $request->short_long_runs=='ON'?1:0;
        $evaluationObj->distinction_consonant_syllable = $request->distinction_consonant_syllable=='ON'?1:0;
        $evaluationObj->short_log_vowels = $request->short_log_vowels=='ON'?1:0;
        $evaluationObj->complete_sentence_meaning = $request->complete_sentence_meaning=='ON'?1:0;
        $evaluationObj->write_descriptively = $request->write_descriptively=='ON'?1:0;
        $evaluationObj->diacritics_unformed_words = $request->diacritics_unformed_words=='ON'?1:0;
        $evaluationObj->consolidate_transcription_skill = $request->consolidate_transcription_skill=='ON'?1:0;
        $evaluationObj->practice_summarizing_text = $request->practice_summarizing_text=='ON'?1:0;
        $evaluationObj->holding_pen_directing_notebook = $request->holding_pen_directing_notebook=='ON'?1:0;
        $evaluationObj->enhance_ability_to_draw = $request->enhance_ability_to_draw=='ON'?1:0;
        $evaluationObj->ability_to_formulate = $request->ability_to_formulate=='ON'?1:0;
        $evaluationObj->improve_pronounciation = $request->improve_pronounciation=='ON'?1:0;
        $evaluationObj->retell_arabic_text = $request->retell_arabic_text=='ON'?1:0;
        $evaluationObj->enhance_ability_formulate_questions = $request->enhance_ability_formulate_questions=='ON'?1:0;
        $evaluationObj->self_confidence_beneficiaries = $request->self_confidence_beneficiaries=='ON'?1:0;
        $evaluationObj->identify_ending_word = $request->identify_ending_word=='ON'?1:0;
        $evaluationObj->common_arabic_words = $request->common_arabic_words=='ON'?1:0;
        $evaluationObj->complete_sentence_with_meaning = $request->complete_sentence_with_meaning=='ON'?1:0;
        $evaluationObj->develop_listening_skill = $request->develop_listening_skill=='ON'?1:0;
        $evaluationObj->identify_color_shapes_week = $request->identify_color_shapes_week=='ON'?1:0;
        $evaluationObj->learning_process = $request->learning_process=='ON'?1:0;
        $evaluationObj->stage_select = $request->stage_select=='ON'?1:0;
        $evaluationObj->integrating_child_environment = $request->integrating_child_environment=='ON'?1:0;
        $evaluationObj->simulgan_process = $request->simulgan_process=='ON'?1:0;
        $evaluationObj->enhancing_knowledge_visually = $request->enhancing_knowledge_visually=='ON'?1:0;
        $evaluationObj->enhancing_recognition = $request->enhancing_recognition=='ON'?1:0;
        $evaluationObj->interactive_visual_recognition = $request->interactive_visual_recognition=='ON'?1:0;
        $evaluationObj->motivating_correct_manner = $request->motivating_correct_manner=='ON'?1:0;
        $evaluationObj->interactive_arabic_vocabulary = $request->interactive_arabic_vocabulary=='ON'?1:0;
        $evaluationObj->prescribed_interactive_methods = $request->prescribed_interactive_methods=='ON'?1:0;
        $evaluationObj->motivate_to_hold_pen_correctly = $request->motivate_to_hold_pen_correctly=='ON'?1:0;
        $evaluationObj->correct_child_orientation = $request->correct_child_orientation=='ON'?1:0;
        $evaluationObj->stimulate_writing_process = $request->stimulate_writing_process=='ON'?1:0;
        $evaluationObj->visual_motivation_track_process = $request->visual_motivation_track_process=='ON'?1:0;
        $evaluationObj->repeation_of_phrace = $request->repeation_of_phrace=='ON'?1:0;
        $evaluationObj->interactive_meaning_clarification = $request->interactive_meaning_clarification=='ON'?1:0;
        $evaluationObj->review_alphabet_letters = $request->review_alphabet_letters=='ON'?1:0;
        $evaluationObj->motivate_to_repeat = $request->motivate_to_repeat=='ON'?1:0;
        $evaluationObj->letter_classification = $request->letter_classification=='ON'?1:0;
        $evaluationObj->triple_word = $request->triple_word=='ON'?1:0;
        $evaluationObj->prescribed_chant = $request->prescribed_chant=='ON'?1:0;
        $evaluationObj->new_two_five_words = $request->new_two_five_words=='ON'?1:0;
        $evaluationObj->first_group_sight_words = $request->first_group_sight_words=='ON'?1:0;
        $evaluationObj->motivating_to_pronounce = $request->motivating_to_pronounce=='ON'?1:0;
        $evaluationObj->named_card_identification = $request->named_card_identification=='ON'?1:0;
        $evaluationObj->extract_required_letter = $request->extract_required_letter=='ON'?1:0;
        $evaluationObj->motivate_to_copy_alphabet = $request->motivate_to_copy_alphabet=='ON'?1:0;
        $evaluationObj->request_transcribe = $request->request_transcribe=='ON'?1:0;
        $evaluationObj->character_tracing = $request->character_tracing=='ON'?1:0;
        $evaluationObj->three_similar_letters = $request->three_similar_letters=='ON'?1:0;
        $evaluationObj->three_words_read_motivate_short = $request->three_words_read_motivate_short=='ON'?1:0;
        $evaluationObj->three_words_read_motivate_long = $request->three_words_read_motivate_long=='ON'?1:0;
        $evaluationObj->display_short_long = $request->display_short_long=='ON'?1:0;
        $evaluationObj->words_with_intensity = $request->words_with_intensity=='ON'?1:0;
        $evaluationObj->read_graded_stories = $request->read_graded_stories=='ON'?1:0;
        $evaluationObj->read_graded_stories_red_orange = $request->read_graded_stories_red_orange=='ON'?1:0;
        $evaluationObj->writing_letters = $request->writing_letters=='ON'?1:0;
        $evaluationObj->invisibly_dictating = $request->invisibly_dictating=='ON'?1:0;
        $evaluationObj->invisibly_dictating_short_duration = $request->invisibly_dictating_short_duration=='ON'?1:0;
        $evaluationObj->invisibly_dictating_short_duration_long_vowels = $request->invisibly_dictating_short_duration_long_vowels=='ON'?1:0;
        $evaluationObj->invisibly_dictating_group_words = $request->invisibly_dictating_group_words=='ON'?1:0;
        $evaluationObj->copy_sight_words = $request->copy_sight_words=='ON'?1:0;
        $evaluationObj->name_on_lines = $request->name_on_lines=='ON'?1:0;
        $evaluationObj->day_on_line = $request->day_on_line=='ON'?1:0;


        $evaluationObj->comment = $request->comment;
        if ($evaluationObj->save()) {
            $student->is_evaluated = 1;
            $student->save();
        }

        // Event to be created and email sent

        $to  = 'kumar.sunnyil@gmail.com'; // $student->email;
        $evaluationEmailData = [
            'title' => 'Student Evaluation Status',
            'subject' => 'Student Evaluation Status',
            'to' => $to,
            'message' => 'You have been successfully evaluated, please pay the fees in the below link',
            'studentDetails' => $student,
        ];
        event(new StudentEvaluated($evaluationEmailData));

        return redirect('/admin/users')->with('success', "Student Report Submitted.");
    }
}
