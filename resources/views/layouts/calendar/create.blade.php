@extends('layouts.app-master')
@section('content')
    <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">


    @role('student')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Events</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>

                <div class="col-md-12">
                    @if ($scheduledDate !== null)
                        <p class="py5"></p>
                        <div class="card card-default">
                            <div class="card-header">
                                <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Scheduled Event</h1>
                            </div>
                            <div class="col-12 col-sm-6 px20 ">
                                <div class="card" style="width: 25rem;">
                                    <div class="card-body">
                                        <div class="card-title"><span> Name: </span> <span>
                                                <b>{{ $screenuser->name }}</b></span></div>
                                        <p class="card-text"><span> Email: </span> <span><b>{{ $screenuser->email }}</b></span>
                                        </p>
                                        <hr />
                                        <p class="card-text"><span> Date of Meeting:</span>
                                            <span><b>{{ $scheduledDate }}</b></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Confirm Evaluation</h1>
                                </div>

                                <div class="col-12 col-sm-6 px-20 ">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <p class="card-text"><span> Name: </span> <span>
                                                    <b>{{ $screenuser->name }}</b></span>
                                                </p>
                                            </div>
                                            <p class="card-text"><span> Email: </span>
                                                <span><b>{{ $screenuser->email }}</b></span>
                                            </p>
                                            <hr />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <form method="post" action="{{ url('/student') }}/{{ Auth::user()->id }}/date-confirm/">
                                        @csrf
                                        <div class="card-body">
                                            <!-- Date and time -->
                                            <div class="form-group">
                                                <label>Date and time:</label>
                                                <div class="input-group date" id="reservationdatetime"
                                                    data-target-input="nearest">
                                                    <input name="confirmDateAndtime" type="text"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdatetime" />
                                                    <input type="hidden" id="user_id" name="user_id"
                                                        value="{{ Auth::user()->id }}" type="text"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdatetime" />
                                                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                                                    <div class="input-group-append" data-target="#reservationdatetime"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- {{auth()->user()->name}}&nbsp; {{auth()->user()->id}}&nbsp; --}}
                                            <button type="submit" class="btn btn-primary" id="confrmEval">Confirm
                                                Evaluation</button>
                                        </div>
                                        {{-- <a class="w-100 btn btn-lg btn-info" href="{{ url('/student') }}/date-confirm" class="btn btn-warning">Sign-up</a> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif


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
                        document.getElementById("timeVal").value = $input.val()

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
