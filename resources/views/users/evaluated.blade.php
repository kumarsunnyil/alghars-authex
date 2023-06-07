@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">

                <div class="bg-light p-4 rounded">
                    <div class="lead">
                        <h1 style="color: #0499f2; font-weight: 900;">Evaluation List & Status</h1>
                    </div>
                    <div class="mt-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Evaluator</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Evaluation Status</th>
                                    <th>Report</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($mapped as $key => $studentList)
                                    @foreach ($studentList as $student)



                                        <tr>
                                            <td> {{ $key }}</td>
                                            <td>{{ $student['studentName'] }}</td>
                                            <td><a href="/student/{{$student['studentUserTableID']}}/show">{{ $student['studentEmail'] }}
                                                </a></td>
                                            <td> {{ $student['evaluated'] }} </td>
                                            <td>
                                                @if ($student['evaluated'] == 'Evaluated')
                                                    <a href="/admin/{{ auth()->user()->id }}/screen/report/{{ $student['studentId'] }}"
                                                        class="btn btn-info">View Evaluation</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Evaluator</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Evaluation Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style>
        table,
        th,
        td {
            /* border: 1px solid black; */
        }
    </style>
@endsection
