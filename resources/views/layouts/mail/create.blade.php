@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')
    <h1>Alghars Registration confirmation</h1>

    <html>
    <style>
        table,
        th,
        td {
            border: 1px solid blue;
        }
    </style>

    <body>

        <h3>
            Thank you for the registration,
            your username and password is shared below please keep this <strong><u>confidential</u></strong> </h3>

        <table style="width:100%">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>{{ $mailData['username'] }} </td>
                <td>{{ $mailData['password'] }} </td>
            </tr>
        </table>
    </body>

    </html>

    @include('auth.partials.copy')
@endsection
