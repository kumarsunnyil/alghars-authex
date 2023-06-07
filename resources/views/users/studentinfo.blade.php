<link rel="stylesheet" href="{!! url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') !!}">

@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Students</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Registered Student with details
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <tr>
                                        <td>Name</td>
                                        <td>
                                            <span class="col-8"> <b>{{ $student['name'] }}</b></span>
                                            <span class="col-4">
                                                @if ($evaluationDate == '')
                                                    <p class="lead">Please Reach out to the student to schedule a time for
                                                        evaluation</p>
                                                    <a href="#" class="btn btn-primary">Send Reminder By Email</a>
                                                @else
                                                    <a href="/admin/{{ Auth::user()->id }}/student/evaluate/{{ $student['id'] }}"
                                                        class="btn btn-primary">Evaluate Student </a>
                                                @endif
                                            </span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Evaluation Date</td>
                                        <td><b>{{ $evaluationDate }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>{{ $student['age'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $student['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Parents Name</td>
                                        <td>{{ $student['p_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{ $student['phone'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>{{ $student['location'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Program</td>
                                        <td>{{ $student['program_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Message</td>
                                        <td>{{ $student['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Active</td>
                                        <td>{{ $student['is_active'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Evaluated</td>
                                        <td>{{ $student['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Grade</td>
                                        <td>{{ $student['grade'] }}</td>
                                    </tr>
                                </table>
                                <div>
                                    @if ($evaluationDate == '')
                                        <p class="lead">Please Reach out to the student to schedule a time for
                                            evaluation</p>
                                        <a href="#" class="btn btn-primary">Send Reminder By Email</a>
                                    @else
                                        <a href="/admin/{{ Auth::user()->id }}/student/evaluate/{{ $student['id'] }}"
                                            class="btn btn-primary">Evaluate Student </a>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

    {{-- <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script> --}}
    <!-- Bootstrap 4 -->
    {{-- <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}
    <!-- DataTables  & Plugins -->
    <script src="{!! url('assets/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/jszip/jszip.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/pdfmake/pdfmake.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/pdfmake/vfs_fonts.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-buttons/js/buttons.print.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') !!}""></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
