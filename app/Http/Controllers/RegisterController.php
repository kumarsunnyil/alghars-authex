<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentUser;
use App\Models\StudentUserVerify;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;


use App\Events\StudentRegistered;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

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
        // setting up registration as a transaction
        DB::transaction(
            function () use ($request) {
                // $request->password = "test123password"; // to be deleted
                $password = $this->generatePassword(16);
                $user = User::create(
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'username' => $request->username,
                        'password' => $password,
                    ]

                );

                $student  =  StudentUser::create(

                    [
                        'name' => $request->name,
                        'age' => $request->age,
                        'email' => $request->email,
                        'username' => $request->username,
                        'grade' => $request->grade,
                        'password' => $password,
                        'p_name' => $request->p_name,
                        'phone' => $request->phone,
                        'location' => $request->location,
                        'program_name' => $request->program_name,
                        'message' => $request->message,
                    ]
                );

                $this->createStudentRole($user);
                $token = Str::random(64);


                $title = 'New User Registration';
                $subject = 'Student Registration and from Alghars ';
                //$to =  'kumar.sunnyil@gmail.com'; // $request->email;
                $to =  $request->email;
                $message = '';
                /**
                 * Generating the token during registration
                 */
                StudentUserVerify::create([
                    'student_user_id' => $student->id,
                    'token' => $token
                ]);


                $mailData = [
                    'title' => $title,
                    'subject' => $subject,
                    'to' => $to,
                    'message' => $message,
                    'token' => $token,
                    'username'=> $request->username,
                    'password'=> $password,
                ];
                event(new StudentRegistered($mailData));

            }
        );
        return redirect('/registered')->with('success', "Account successfully registered.");
    }
    /**
     *
     */
    public function registered()
    {
        return view('auth.registered');
    }

    /**
     * Write code on Method
     * this is the method that verifies the registered user is a verified user.
     * @doc - https://www.itsolutionstuff.com/post/laravel-9-custom-email-verification-tutorialexample.html
     * @return response()
     * @param mixed $token
     *
     * @return [type]
     */
    public function verifyStudentAccount($token)
    {
        $verifyUser = StudentUserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';


        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;
            dd($user);

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->with('message', $message);
    }

    public function createStudentRole(User $user)
    {
        $user->assignRole([4]);
    }

    function generatePassword($length = 24)
    {
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' .
            '0123456789@#$';

        $str = '';
        $max = strlen($chars) - 1;

        for ($i = 0; $i < $length; $i++)
            $str .= $chars[random_int(0, $max)];

        return $str;
    }
}
