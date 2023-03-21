<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\AlgharsEmail;

class AlgharsMailController extends Controller
{
       /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {

        //dd('finally');
        $mailData = [
            'title' => 'Mail from The Laravel Application ',
            'body' => 'This is for testing email using smtp from Laravel.'
        ];

        Mail::to('kumar.sunnyil@gmail.com')->send(new AlgharsEmail($mailData));
         dd("Email is sent successfully.");
        //  return view('layouts.mail.create');
    }
}
