@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')
    <link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/slick.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/slick-theme.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">
    <link href="https://www.dafontfree.net/embed/bmlybWFsYS11aS1ib2xkJmRhdGEvNDYvbi81ODc1OS9OaXJtYWxhQi50dGY" rel="stylesheet"
        type="text/css" />
    <section id="registration">
        <div class="container">
            <h2 class="registrationTitle">REGISTRATION FORM</h2>
            <div class="row">
                <div class="">
                    <form method="post" action="{{ route('register.perform') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                        <div class="singleInput singleInput">
                            <input type="text" class="form-control" name="name" value="{{ old('age') }}"
                                placeholder="Enter your name" required="required" autofocus>
                            <label for="floatingName">Student's Name</label>
                            @if ($errors->has('age'))
                                <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                            @endif
                        </div>

                        <div class="singleInput">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}"
                                placeholder="Enter your age" required="required" autofocus>
                            <label for="floatingName">Age of student</label>
                            @if ($errors->has('age'))
                                <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <input type="text" class="form-control" name="grade" value="{{ old('grade') }}"
                                placeholder="Enter the Grade" required="required" autofocus>
                            <label for="floatingName">Grade</label>
                            @if ($errors->has('grade'))
                                <span class="text-danger text-left">{{ $errors->first('grade') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <input type="text" class="form-control" name="p_name" value="{{ old('p_name') }}"
                                placeholder="Parents Name" required="required" autofocus>
                            <label for="floatingName">Parents Name</label>
                            @if ($errors->has('p_name'))
                                <span class="text-danger text-left">{{ $errors->first('p_name') }}</span>
                            @endif
                        </div>

                        <div class="singleInput">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                placeholder="Phone Number" required="required" autofocus>
                            <label for="floatingName">Phone Number</label>
                            @if ($errors->has('phone'))
                                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>

                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                                placeholder="Enter the Location" required="required" autofocus>
                            <label for="floatingName">Enter the Location</label>
                            @if ($errors->has('location'))
                                <span class="text-danger text-left">{{ $errors->first('location') }}</span>
                            @endif
                        </div>
                        <div class="singleInput">
                            <label for="floatingName">Program Name</label>
                            <select class="form-select" aria-label="Default select example" id="program_name"
                                name="program_name" value="{{ old('program_name') }}">
                                <option selected disabled>Choose Program</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            @if ($errors->has('program_name'))
                                <span class="text-danger text-left">{{ $errors->first('program_name') }}</span>
                            @endif
                        </div>

                        <div class="singleInput">
                            <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message"
                                required="required" cols="30" rows="5" autofocus>
                            </textarea>
                            <label for="floatingName">Enter your message</label>
                            @if ($errors->has('message'))
                                <span class="text-danger text-left">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>


                        @include('auth.partials.copy')
                    </form>
                </div>
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

                    <div class="singleItem">
                        <div class="textItem d-flex align-items-center">
                            <div class="textWithNumber">
                                <h2>3</h2>
                                <p class="text">
                                    Choose the appropriate package with
                                    the times after viewing the report
                                </p>
                            </div>
                            <img src="images/form-3.png" alt="form-1" class="img-fluid">
                        </div>
                    </div>
                    <div class="singleItem">
                        <div class="textItem d-flex align-items-center">
                            <div class="textWithNumber">
                                <h2>4</h2>
                                <p class="text">
                                    Make sure to complete the payment
                                    process electronically to confirm
                                    registration
                                </p>
                            </div>
                            <img src="images/form-4.png" alt="form-1" class="img-fluid">
                        </div>
                    </div>
                    <div class="singleItem">
                        <div class="textItem d-flex align-items-center">
                            <div class="textWithNumber">
                                <h2>5</h2>
                                <p class="text">
                                    Follow the dates of the sessions through
                                    the dedicated application
                                </p>
                            </div>
                            <img src="{!! url('assets/images/form-5.png') !!}" alt="form-1" class="img-fluid">
                        </div>
                    </div>
                    <img src="{!! url('assets/images/doubleDash.png') !!}" alt="doubleDash" class="img-fluid doubleDash">
                </div>
            </div>


        </div>
    </section>


    <script src="{!! url('assets/js/popper.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! url('assets/js/jquery.slim.') !!}js"></script>
    <script src="{!! url('assets/js/slick.js') !!}"></script>
    <script src="{!! url('assets/js/custom.js') !!}"></script>
@endsection
