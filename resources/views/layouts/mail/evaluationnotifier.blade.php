@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')
    <h1>Admin Notification - the student {{ $evaluationEmailData['studentDetails']->name }} has been succefully evaluated
    </h1>

    @include('auth.partials.copy')
@endsection
