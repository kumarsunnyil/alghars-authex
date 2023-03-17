<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class StudentRegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //dd('Student Registration Page');
        return view('student.sregister');
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
        $studentUser = StudentUser::create($request->validated());

        auth()->login($studentUser);

        return redirect('/')->with('success', "Account successfully registered.");
    }


}
