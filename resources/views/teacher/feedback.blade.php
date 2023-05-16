@extends('layouts.app-master')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{!! url('assets/plugins/fontawesome-free/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/fullcalendar/main.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/dist/css/adminlte.min.css') !!}">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #0499f2; font-weight: 900;">Feedback</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Create Course</h1>
                    </div>
                    <form method="post" action="{{ url('/') }}/admin/{{auth()->user()->id}}/feedback">
                        @csrf
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Program Name</label>
                                <input type="text" class="form-control" name="program_name" value="{{ old('username') }}"
                                    placeholder="Program Name" required="required" autofocus />
                                <label>Program Description</label>
                                <input type="text" class="form-control" name="description" value="{{ old('username') }}"
                                    placeholder="Enter the description" required="required" autofocus />
                                <label>Number of classes required to complete the course</label>
                                <input type="number" class="form-control" name="no_of_classes" id="no_of_classes" value="{{ old('username') }}"
                                    placeholder="Enter the number of classes " required="required" autofocus />

                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Teacher</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name="user_id" id="user_id">
                                    {{ $count = 0 }}
                                    @foreach ($data['teacher'] as $teacher)
                                        @if ($count == 0)
                                            <option selected="selected" value="{{ $teacher->id }}">
                                                {{ $teacher->email }}</option>
                                            {{ $count++ }}
                                        @else
                                            <option value="{{ $teacher->email }}">{{ $teacher->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="singleInput">
                                <label for="floatingName">Enter your message</label>
                                <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message"
                                    required="required" cols="30" rows="5" autofocus style="height: 234px !important;">
                                </textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger text-left">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-primary">Create Course</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
            <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
            <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
            <script src="{!! url('assets/plugins/daterangepicker/daterangepicker.js') !!}"></script>
            <script>
                $(function() {
                    $('#reservation').daterangepicker()
                    $('#daterange-btn').daterangepicker({
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                    'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                        function(start, end) {
                            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                                'MMMM D, YYYY'))
                        }
                    )
                    $("#reservation").change(function() {
                        var selectedDate = $(this).val().split(" - ");
                        document.getElementById('start_date').value = selectedDate[0].split("/").reverse().join(
                        "-");
                        document.getElementById('end_date').value = selectedDate[1].split("/").reverse().join("-");
                    });
                })
            </script>
        </section>
    </div>

@endsection
