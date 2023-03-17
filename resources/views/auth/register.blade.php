@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

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
        <div class="form-group form-floating mb-3">
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
@endsection
