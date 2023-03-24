<link rel="stylesheet" href="{!! url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') !!}">

@extends('layouts.app-master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="card-title">Registered Student with details</h1>
                                </div>
                                <div class="col-sm-6">
                                  <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">Students</li>
                                  </ol>
                                </div>
                              </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
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
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

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
