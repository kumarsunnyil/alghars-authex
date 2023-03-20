@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        {{--  Additional information  --}}
        <div class="form-group form-floating mb-3 singleInput">
            <input type="text" class="form-control" name="name" value="{{ old('age') }}"
                placeholder="Enter your name" required="required" autofocus>
            <label for="floatingName">Student Name</label>
            @if ($errors->has('age'))
                <span class="text-danger text-left">{{ $errors->first('age') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="age" value="{{ old('age') }}"
                placeholder="Enter your age" required="required" autofocus>
            <label for="floatingName">Age of student</label>
            @if ($errors->has('age'))
                <span class="text-danger text-left">{{ $errors->first('age') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="grade" value="{{ old('grade') }}"
                placeholder="Enter the Grade" required="required" autofocus>
            <label for="floatingName">Grade</label>
            @if ($errors->has('grade'))
                <span class="text-danger text-left">{{ $errors->first('grade') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="p_name" value="{{ old('p_name') }}"
                placeholder="Parents Name" required="required" autofocus>
            <label for="floatingName">Parents Name</label>
            @if ($errors->has('p_name'))
                <span class="text-danger text-left">{{ $errors->first('p_name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                placeholder="Phone Number" required="required" autofocus>
            <label for="floatingName">Phone Number</label>
            @if ($errors->has('phone'))
                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                placeholder="Enter the Location" required="required" autofocus>
            <label for="floatingName">Enter the Location</label>
            @if ($errors->has('location'))
                <span class="text-danger text-left">{{ $errors->first('location') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="program_name" value="{{ old('program_name') }}"
                placeholder="Program Name" required="required" autofocus>
            <label for="floatingName">Program Name</label>
            @if ($errors->has('program_name'))
                <span class="text-danger text-left">{{ $errors->first('program_name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message"
                required="required" rows="10" cols="100" autofocus>
            </textarea>
            <label for="floatingName">Enter your message</label>
            @if ($errors->has('message'))
                <span class="text-danger text-left">{{ $errors->first('message') }}</span>
            @endif
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>

    <section id="registration">
        <div class="container">
            <h2 class="registrationTitle">REGISTRATION FORM</h2>

            <div class="row">
                <div class="col-md-5">
                    <form action="#">
                        <div class="singleInput">
                            <label for="name">Student’s Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Student Name"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Student’s age</label>
                            <input type="text" name="age" id="age" placeholder="Enter Student’s Age"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Grade</label>
                            <input type="text" name="Grade" id="Grade" placeholder="Grade" class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Parent's Name</label>
                            <input type="text" name="Parent" id="Parent" placeholder="Enter your Name"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Student’s Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Student Name"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Phone</label>
                            <input type="text" name="Phone" id="Phone" placeholder="+971 00 000 0000"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="name">Email</label>
                            <input type="email" name="Email" id="Email" placeholder="Enter Student Name"
                                class="form-control">
                        </div>

                        <div class="singleInput">
                            <label for="location">Location</label>
                            <select class="form-select" aria-label="Default select example" id="location">
                                <option selected disabled>Choose Area</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>

                        <div class="singleInput">
                            <label for="location">Program</label>
                            <select class="form-select" aria-label="Default select example" id="Program">
                                <option selected disabled>Choose Program</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>

                        <div class="singleInput">
                            <label for="message">Message</label>
                            <textarea name="message" id="" cols="30" rows="5" placeholder="Enter your Message"
                                class="form-control"></textarea>

                        </div>

                        <div class="singleInput d-flex align-items-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I’ve read the terms and conditions and I
                                agree</label>
                        </div>

                        <input type="button" value="Register Now" class="btn commonBtn mt-4">
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="formRight">

                        <div class="singleItem">
                            <div class="textItem d-flex align-items-center">
                                <div class="textWithNumber">
                                    <h2>1 </h2>
                                    <p class="text">
                                        Fill in the registration form and select
                                        favorite programme
                                    </p>
                                </div>
                                <img src="images/form-1.png" alt="form-1" class="img-fluid">
                            </div>
                        </div>

                        <div class="singleItem">
                            <div class="textItem d-flex align-items-center">
                                <div class="textWithNumber">
                                    <h2>2</h2>
                                    <p class="text">
                                        Schedule an evaluation visit
                                    </p>
                                </div>
                                <img src="images/form-2.png" alt="form-1" class="img-fluid">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
