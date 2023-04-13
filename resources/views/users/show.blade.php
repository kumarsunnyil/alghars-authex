@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">

                <div class="bg-light p-4 rounded">
                    <div class="lead">
                        <h1>Profile</h1>
                    </div>
                    <div class="container mt-4">
                        <div>
                            Name: {{ $user->name }}
                        </div>
                        <div>
                            Email: {{ $user->email }}
                        </div>
                        <div>
                            Username: {{ $user->username }}
                        </div>
                    </div>

                </div>
                <div class="mt-4">
                    <a href="/admin/{{ Auth::user()->id }}/edit" class="btn btn-info">Edit </a>
                    <a href="/admin/student" class="btn btn-default">Back </a>
                </div>
            </div>
        </section>
    </div>
@endsection
