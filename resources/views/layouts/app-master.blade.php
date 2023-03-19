<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}
    {{--
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>
     --}}
    {{-- Admin LTE --}}

    <!-- Custom styles for this template -->
    {{-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{!! url('assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"') !!}>
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{!! url('assets/plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! url('assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! url('assets/plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('assets/dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}">
    <!-- summernote -->
    <link rel="stylesheet" href="{!! url('assets/plugins/summernote/summernote-bs4.min.css') !!}">


</head>

<body class=" @guest sidebar-collapse @endguest
">
    @guest
        @include('layouts.partials.anonymousnavbar')

    @endguest

    @auth
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')
    @endauth
    <div>
        <main class="container mt-15">
            @yield('content')
        </main>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}

    @section('scripts')

    @show

    {{-- ADMIN LTE  --}}
    <script src="{!! url('assets/plugins/jquery/jquery.min.js') !!}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{!! url('assets/plugins/jquery-ui/jquery-ui.min.js ') !!}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>



    <!-- daterangepicker -->
    <script src="{!! url('assets/plugins/moment/moment.min.js') !!}"></script>
    <script src="{!! url('assets/plugins/daterangepicker/daterangepicker.js') !!}"></script>


    <!-- overlayScrollbars -->
    <script src="{!! url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! url('assets/dist/js/adminlte.js') !!}"></script>

    <script src="{!! url('assets/dist/js/pages/dashboard.js') !!}"></script>

</body>

</html>
