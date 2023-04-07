<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>AL GHARS</title>



    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    @if (!auth()->check())
        <link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">
        <link href="https://www.dafontfree.net/embed/bmlybWFsYS11aS1ib2xkJmRhdGEvNDYvbi81ODc1OS9OaXJtYWxhQi50dGY"
            rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{!! url('assets/css/slick.css') !!}">
        <link rel="stylesheet" href="{!! url('assets/css/slick-theme.css') !!}">
    @endif
    {{--             Alghars CSS Above            --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
        integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/brands.min.js"
        integrity="sha512-KYlRezs7yAa59UnX6zAvY7I96Te02kycQn02Sr6FU/fBpxcXAwumRe5DHVrqVnWTt9HY/PktrAPZzSe9UE1Yxg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/solid.min.js"
        integrity="sha512-apZ8JDL5kA1iqvafDdTymV4FWUlJd8022mh46oEMMd/LokNx9uVAzhHk5gRll+JBE6h0alB2Upd3m+ZDAofbaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- CDN Links Above --}}

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

    @if (str_contains($prefix, 'admin') || str_contains($prefix, 'student'))
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
