@extends('layouts.app-master')

@section('content')
    {{-- <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}"> --}}
    <link rel="stylesheet" href="{!! url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">




    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Manage Classes</li>
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
                        <h3 class="card-title">Manage Classes</h3>
                    </div>
                    @if (Session::has('successful_message'))
                        <div class="alert alert-success">
                            {{ Session::get('successful_message') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('/') }}/admin/users/manage-classes">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group p4">
                                    <div class="col-sm-6">
                                        <label>Course</label>
                                    </div>
                                    <div class="select2-purple">
                                        <select class="form-control select2 select2-danger"
                                            data-dropdown-css-class="select2-danger" data-placeholder="Select Course"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;"
                                            name="courseSelect" id="courseSelect">
                                            <option value="Sunday">Select Course</option>
                                            @foreach ($data['courses'] as $key => $course)
                                                {{ $course['program_name'] }}
                                                <option value="{{ $course['program_name'] }}">{{ $course['program_name'] }}
                                                </option>
                                                <input type="hidden" value="{{ $course['program_name'] }} "
                                                    id="course_name" name="course_name" />
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label>Days of Week</label>
                                    </div>
                                    <div class="select2-purple">
                                        <select class="select2" multiple="multiple" data-placeholder="Select Days of Week"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;"
                                            name="daysOfWeekSelect" id="daysOfWeekSelect">
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thrusday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row d-flex justify-content-center mt-100">
                                    <div class="col-md-6">
                                        <input type="hidden" id="daysOfWeek" name="daysOfWeek" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Teacher</label>
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;" name="teacher"
                                        id="teacher">
                                        {{ $count = 0 }}
                                        @foreach ($data['teacher'] as $teacher)
                                            @if ($count == 0)
                                                <option selected="selected" value="{{ $teacher->email }}">
                                                    {{ $teacher->email }}</option>
                                                {{ $count++ }}
                                            @else
                                                <option value="{{ $teacher->email }}">{{ $teacher->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student</label>
                                    <div class="select2-purple">
                                        <select class="select2" multiple="multiple" data-placeholder="Select a Student"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;" name="student"
                                            id="student">
                                            @foreach ($data['students'] as $student)
                                                <option value="{{ $student->email }}">{{ $student->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center mt-100">
                                    <div class="col-md-6">
                                        <input type="hidden" value="" id="studentThrottle" name="studentThrottle" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <button type="submit" class="btn btn-primary">Manage Classes</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/inputmask/jquery.inputmask.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
    <script>
        $(function() {
            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
            $("#student").change(function() {
                console.log($(this).val());
                document.getElementById('studentThrottle').value = $(this).val();
            });
            $("#daysOfWeekSelect").change(function() {
                console.log($(this).val());
                document.getElementById('daysOfWeek').value = $(this).val();
            });
            $("#courseSelect").change(function() {
                console.log($(this).val());
                document.getElementById('course_name').value = $(this).val();
            });
        })
    </script>
@endsection
