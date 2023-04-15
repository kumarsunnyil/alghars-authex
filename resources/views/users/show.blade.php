@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="alert alert-success alert-success-profile" role="alert">
                    <h4 class="alert-heading">View your profile!</h4>
                    <hr>
                    <div class="bg-light p-4 rounded mt-4">
                        <p> Name: {{ $user->name }} </p>
                        <p> Email: {{ $user->email }} </p>
                        <p> Username: {{ $user->username }} </p>
                    </div>
                    <hr>
                </div>
                <div class="mt-4">
                    <a href="/admin/{{ Auth::user()->id }}/edit" class="btn btn-info primary">Edit </a>
                    <a href="/admin/student" class="btn btn-default primary text-style">Back </a>
                </div>
            </div>
        </section>
    </div>

    <style>
        .alert-success-profile {
            color: #155724;
            background-color: #d4edda;
            border-color: #29352b38;
        }

        .text-style {
            color: black;
        }
    </style>
@endsection
