<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentUser;
use App\Models\StudentUserVerify;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;

use Mail;
use App\Mail\AlgharsEmail;


class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // dd('Registration Page');
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {


        $student  =  StudentUser::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'username' => $request->username,
            'grade' => $request->grade,
            'password' => "test123password", // TODO temporary stub to be later removed

            'password' => $request->password,
            'p_name' => $request->p_name,
            'phone' => $request->phone,
            'location' => $request->namllocationocatione,
            'program_name' => $request->program_name,
            'message' => $request->message,
        ]);

        // echo $student->id . " ID ";
        // dd($student);
        $token = Str::random(64);

        StudentUserVerify::create([
              'student_user_id' => $student->id,
              'token' => $token
            ]);

            Mail::send('layouts.mail.create', ['token' => $token], function($message) use($request){
                $message->to('kumar.sunnyil@gmail.com');
                $message->subject('Email Verification Mail');
            });


            //      Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
            //     $message->to($request->email);
            //     $message->subject('Email Verification Mail');
            // });


            // $message = []
            // $mailData = [
            //     'title' => 'Registration email ',
            //     'token' => $token,
            //     'body' => 'This is for testing email using smtp from Laravel.',
            // ];

            // Mail::to('kumar.sunnyil@gmail.com')->send(new AlgharsEmail($mailData));

        /**
         * TODO
         *  successful Registration ,
         * Need to add the profile details to other student table
         *
         */
        // auth()->login($user);

        //return redirect('/registered')->with('success', "Account successfully registered.");
    }
    /**
     *
     */
    public function registered() {
        //  dd('Registered Page display');
        return view('auth.registered');
    }

    /**
     * Write code on Method
     * @doc - https://www.itsolutionstuff.com/post/laravel-9-custom-email-verification-tutorialexample.html
     * @return response()
     */
    public function verifyStudentAccount($token)
    {
        $verifyUser = StudentUserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
            dd($user);
            dd($verifyUser);

            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

      return redirect()->route('login')->with('message', $message);
    }
}
