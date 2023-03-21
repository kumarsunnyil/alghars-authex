<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
        /**
     * Calendar
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // dd('this is a test');
        return view('layouts.calendar.create');
    }
}
