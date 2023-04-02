<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>



    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! url('assets/plugins/fontawesome-free/css/all.min.css') !!}">

    <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{!! url('assets/plugins/jquery-ui/jquery-ui.min.js ') !!}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{!! url('assets/dist/js/adminlte.min.js') !!}"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! url('assets/plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('assets/dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</head>

<body class="eventBody @guest sidebar-collapse @endguest hold-transition sidebar-mini layout-fixed">
    {{-- @guest --}}

    {{-- @endguest --}}
    @php
        $prefix = Request::route()->getPrefix();
        $route = Route::current()->getName();
    @endphp

    @if (str_contains($prefix, 'admin') || str_contains($prefix, 'student') )
        @auth
            @include('layouts.partials.navbar')
            @include('layouts.partials.sidebar')
        @endauth
    @else
        @include('layouts.partials.anonymousnavbar')
    @endif
    <div>
        <main class="container mt-15">
            @yield('content')
        </main>
    </div>



    @section('scripts')

    @show





</body>

</html>
