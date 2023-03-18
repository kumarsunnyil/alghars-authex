@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')

    <h2> you have been successfully registered. </h2><h4> We have sent you an email, please click on the link to verify your email </h4>
        @include('auth.partials.copy')

@endsection
