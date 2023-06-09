@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add New Users</li>
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
                            Add new user and assign role.
                        </h1>
                    </div>

                    <div class="mt-4">
                        <form method="POST" action="">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input value="{{ old('name') }}" type="text" class="form-control" name="name"
                                    placeholder="Name" required>

                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ old('email') }}" type="email" class="form-control" name="email"
                                    placeholder="Email address" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input value="{{ old('username') }}" type="text" class="form-control" name="username"
                                    placeholder="Username" required>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>



                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-control" name="role" id="role"  required>
                                    <option value="">Select role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            {{-- @if ($role->name !== 'student') {{ in_array($role->name, $userRole) ? 'selected' : '' }}>{{ $role->name }}</option> @endif --}}
                                            @endforeach
                                </select>
                                @if ($errors->has('role'))
                                    <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
