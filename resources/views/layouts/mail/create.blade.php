@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')

    <h1>Email Verification Mail</h1>

Please verify your email with bellow link:
<a href="{{ route('register.verify', $mailData['token']) }}">Verify Email</a>
        @include('auth.partials.copy')

@endsection
