@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded " style="margin-left:100px">
        @auth
            <p class="lead">Dashboard </p>
            @role('admin')
More to come here

            @endrole

            @role('student')
            @include('student.home')
                Student Dashboard Details
            @endrole


        @endauth

        @guest

        @include('home.anonymousindex')
        @endguest
    </div>
@endsection
