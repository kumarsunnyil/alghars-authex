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
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h1 class="card-title" style="color: #0499f2; font-weight: 900;">My Students</h1>
                </div>
                <div>
                    <table id="student-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Username</th>
                                <th>Email(s)</th>
                                <th>Active / In Active</th>
                                <th>Programe Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->username }} </td>
                                    <td>{{ $student->email }} </td>
                                    <td>{{ $student->is_active ? 'Active' : 'In Active' }} </td>
                                    <td>{{ $student->program_name }} </td>

                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Student Name</th>
                                <th>username</th>
                                <th>Email(s)</th>
                                <th>Active Student</th>
                                <th>Programe Name</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>


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
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#student-table').DataTable({
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
