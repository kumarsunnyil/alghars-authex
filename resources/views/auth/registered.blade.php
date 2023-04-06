@extends('layouts.auth-master')
{{-- {{dd($errors)}} --}}
@section('content')

    <h2> you have been successfully registered. </h2><h4> We have sent you an email, Please check your email for login credentials </h4>
        @include('auth.partials.copy')
        <script type="text/javascript">
            window.location = "{{ url('/') }}";//here double curly bracket
        </script>
@endsection
