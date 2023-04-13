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
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-body">

                            @if (count($students) > 0)

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Username</th>
                                        <th>Location</th>
                                        <th>Programe Name</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $key => $student)
                                        {{-- {{ dd($students[$key])}} --}}
                                        <tr>
                                            <td>{{ $students[$key]['name'] }}</td>
                                            <td>{{ $students[$key]['parent_name'] }} </td>
                                            {{-- <td>{{ $students[$key]['email'] }} </td> --}}
                                            <td>{{ $students[$key]['location'] }} </td>
                                            <td>{{ $students[$key]['program_name'] }} </td>
                                            <td>{{ $students[$key]['grade'] }} </td>
                                            <td> <a
                                                    href="/admin/{{ $students[$key]['screenUserId'] }}/studentdetails/{{ $students[$key]['id'] }}">
                                                    View </a> </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Username</th>
                                        <th>Location</th>
                                        <th>Programe Name</th>
                                        <th>Grade</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                            @else
                            <div>
                                <table id="example2" class="table table-bordered table-hover">
                                    <tr>
                                        <td>

                                            <h1 style="color: #0499f2; font-weight: 900;"> There are no more students for evaluation</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endif
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
