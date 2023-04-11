@extends('layouts.app-master')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="bg-light p-4 rounded">
                <div class="lead">
                    <h1 style="color: #0499f2; font-weight: 900;">Evaluated Student</h1>
                </div>
            <div class="mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Screenuser</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mapped as $key => $studentList)
                            @foreach ($studentList as $student)
                                <tr>
                                    <td> {{ $key }}</td>
                                    <td>{{ $student['studentName'] }}</td>
                                    <td>{{ $student['studentEmail'] }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Screenuser</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
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
