@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded " style="margin-left:100px">
        @auth
            <p class="lead">Dashboard </p>
            @role('admin')
            <script>window.location = "/admin/users";</script>
            @endrole

            @role('student')
                @include('student.home')
                Student Dashboard Details
            @endrole


        @endauth

        @guest



            @php
                $arabicLang = false;
                $currentUrl = url()->full();
                if (str_contains($currentUrl, 'arabic')) {
                    $arabicLang = true;
                }
            @endphp

            @if ($arabicLang)
                @include('home.arabicanonymousindex')
            @else
                @include('home.anonymousindex')
            @endif
        @endguest
    </div>
@endsection
