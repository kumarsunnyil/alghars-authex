<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

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
    

$student  =  StudentUser:: create( [
    'name'=> $request->name,
    'age'=> $request->age,
    'email'=> $request->email,
    'username'=> $request->username,
   // 'email_verified_at'=> $request->email_verified_at,
    'grade'=> $request->grade,
    'password'=> "test123password",

    'password'=> $request->password,
    'p_name'=> $request->p_name,
    'phone'=> $request->phone,
    'location'=> $request->namllocationocatione,
    'program_name'=> $request->program_name,
    'message'=> $request->message,
]);

        /**
         * TODO
         *  successful Registration ,
         * Need to add the profile details to other student table
         *
         */
        // auth()->login($user);

        return redirect('/login')->with('success', "Account successfully registered.");
    }
}
