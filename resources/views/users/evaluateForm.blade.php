@extends('layouts.app-master')

@section('content')
    {{-- <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}"> --}}



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Submit Evaluation </h1>
                    </div>

                    <section class="mb-4">
                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center my-4">Evaluation Report</h2>
                        <!--Section description-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form"
                                    action="{{ url('/') }}/admin/{{ auth()->user()->id }}/evaluation/submit/{{ $student->id }}"
                                    method="POST">
                                    @csrf
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" value="{{ $student->name }}" class="form-control"
                                                    disabled>
                                                <label for="name" class="" disabled>Your name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <input type="hidden" id="email" name="email"
                                                    value="{{ $student->email }}" class="form-control">
                                                <input type="hidden" id="student_id" name="student_id"
                                                    value="{{ $student->id }}" class="form-control">
                                                <label for="email" class="">Your email</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="program_name" name="program_name"
                                                    value="{{ $student->program_name }}" class="form-control" disabled>
                                                <label for="program_name" class="">Programe Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="phone" name="phone"
                                                    value="{{ $student->phone }}" class="form-control" disabled>
                                                <label for="program_name" class="">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="comment" name="comment" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">Evaluation Comment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->
                                    <div class="text-center text-md-left">
                                        <button type="submit" class="text-center text-md-left btn btn-primary">Submit
                                            Evaluation Report</button>
                                    </div>
                                </form>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <p> @auth
                                            Evaluation By <b>{{ auth()->user()->name }}</b>
                                        @endauth
                                    </p>
                                    </li>
                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>{{ $student->phone }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    @endsection
