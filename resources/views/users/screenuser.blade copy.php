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
                        <h1>Calendar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Screenuser</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Assign New Student to the Evaluator</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    {{-- {{dd($students)}} --}}

                    <form method="post" action="{{  url('/') }}/users/assign/to/evaluator">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Screen User</label>
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;" name="screenuser" id="screenuser">

                                        {{ $count = 0 }}
                                        @foreach ($data['screenuser'] as $screenUser)
                                            @if ($count == 0)
                                                <option selected="selected" value="{{ $screenUser->name }}" >{{ $screenUser->name }}</option>
                                                {{ $count ++ }}
                                            @else
                                                <option  value="{{ $screenUser->name }}" >{{ $screenUser->name }}</option>
                                            @endif

                                        @endforeach

                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student</label>
                                    <div class="select2-purple">
                                        <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;" name="student" id="student">
                                            @foreach ($data['students'] as $student)
                                                    <option value ="{{$student->name}}">{{ $student->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>


                        {{-- <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                            placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Email or Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Validate token</button>
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

    <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/inputmask/jquery.inputmask.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>



    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
            $('#student').val(selectedValuesTest).trigger("change");

        })
    </script>
@endsection
