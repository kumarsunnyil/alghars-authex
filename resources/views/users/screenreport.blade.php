@extends('layouts.app-master')
{{-- {{dd($data)}} --}}
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #0499f2; font-weight: 900;">Evaluation Report </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Evaluation Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="alert alert-success alert-success-profile" role="alert">
                    <h4 class="alert-heading">{{ $data->name}} !</h4>
                    <p> Email: {{ $data->email }} </p>
                    <hr>
                    <div class="bg-light p-4 rounded mt-4">
                        <p> Evaluation Comment:
                            <strong>

                                {{ $data->comment }}
                            </strong>
                         </p>
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
