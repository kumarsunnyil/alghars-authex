@extends('layouts.app-master')

@section('content')
    {{-- <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}"> --}}



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Submit Evaluation</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Submit Evaluation</h1>
                    </div>


                    <section class="content">
                        <div class="row">
                            <!--Grid column-->
                            <div class="card card-default col-md-2 m-3 text-center">


                                <ul class="list-unstyled mb-0">
                                    <p> @auth
                                            Evaluation By <b>{{ auth()->user()->name }}</b>
                                        @endauth
                                    </p>
                                    </li>
                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p><span>Student Phone</span> <span class="px-5"><b>{{ $student->phone }}</b></span> </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9 mb-md-0 mb-5 p-3">
                                <form id="contact-form" name="contact-form"
                                    action="{{ url('/') }}/admin/{{ auth()->user()->id }}/evaluation/submit/{{ $student->id }}"
                                    method="POST">
                                    @csrf
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled>Your name</label>
                                                <input type="text" value="{{ $student->name }}" class="form-control"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <input type="hidden" id="email" name="email"
                                                    value="{{ $student->email }}" class="form-control">
                                                <input type="hidden" id="student_id" name="student_id"
                                                    value="{{ $student->id }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="program_name" class="">Programe Name</label>
                                                <input type="text" id="program_name" name="program_name"
                                                    value="{{ $student->program_name }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="program_name" class="">Phone</label>
                                                <input type="text" id="phone" name="phone"
                                                    value="{{ $student->phone }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="message">Evaluation Comment</label>
                                                <textarea type="text" id="comment" name="comment" rows="2" class="form-control md-textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center p-2 text-md-left">
                                        <button type="submit" class="text-center text-md-left btn btn-primary">Submit
                                            Evaluation Report</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
        </section>
    @endsection
