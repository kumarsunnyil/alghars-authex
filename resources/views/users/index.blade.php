@extends('layouts.app-master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="bg-light p-4 rounded">
                    <div class="lead">
                        <h1 style="color: #0499f2; font-weight: 900;">
                            Manage Users
                        </h1>
                        {{-- <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a> --}}
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" width="10%">Username</th>
                                <th scope="col" width="10%">Roles</th>
                                <th scope="col" width="10%" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td><a href="{{ route('users.show', $user->id) }}"
                                            class="btn btn-warning btn-sm">Show</a></td>
                                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex">
                        {!! $users->links() !!}
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection


<style>
  svg.w-5.h-5 {
    width:20px
}
p.text-sm.text-gray-700.leading-5 {
    padding-top: 15px ;
}

nav.flex.items-center.justify-between {
    margin: auto;
    text-align: center;
}
    </style>
