@extends('layouts.app-master')
@section('content')
    <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">


    @role('student')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Calendar</h1>
                        </div>

                        Student Dashboard

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Confirm the date of evaluation</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Date picker</h3>
                        </div>
                        <form method="post" action="{{ url('/student') }}/23/date-confirm/">
                            @csrf
                            <div class="card-body">
                                <!-- Date and time -->
                                <div class="form-group">
                                    <label>Date and time:</label>
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        <input name="confirmDateAndtime"  type="text" class="form-control datetimepicker-input"
                                            data-target="#reservationdatetime" />
                                        <div class="input-group-append" data-target="#reservationdatetime"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- {{auth()->user()->name}}&nbsp; {{auth()->user()->id}}&nbsp; --}}
                                <button type="submit" class="btn btn-primary"  id="confrmEval">Confirm Evaluation</button>
                            </div>
                            {{-- <a class="w-100 btn btn-lg btn-info" href="{{ url('/student') }}/date-confirm" class="btn btn-warning">Sign-up</a> --}}
                        </form>

                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        {{-- <script src="{!! url('assets/plugins/select2/js/select2.full.min.js') !!}"></script> --}}

        <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
        <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! url('assets/plugins/select2/js/select2.full.min.js') !!}"></script>

        {{-- <script src="{!! url('assets/plugins/daterangepicker/daterangepicker.js') !!}"></script> --}}

        <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
        <script src="{!! url('assets/plugins/inputmask/jquery.inputmask.min.js') !!}"></script>
        <script src="{!! url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>



        <script>
            $(function() {

                //Date and time picker
                $('#reservationdatetime').datetimepicker({
                    icons: {
                        time: 'far fa-clock'
                    },
                    onChangeDateTime: function(dp, $input) {
                        // alert($input.val())
                        document.getElementById("timeVal").value  = $input.val()

                    }

                });



            })
        </script>
    @endrole
@endsection
@role('admin')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Calendar</h1>
                    </div>

                    You do not have permission to view this page
                </div>
            </div>
        </section>
    </div>
@endrole
