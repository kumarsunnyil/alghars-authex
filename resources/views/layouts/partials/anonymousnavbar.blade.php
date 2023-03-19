    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li><a href="{{ route('home.index') }}" class="nav-link px-2">Home</a></li>
            @auth
                @role('Admin')
                    <li><a href="{{ route('users.index') }}" class="nav-link px-2">Users</a></li>
                    <li><a href="{{ route('roles.index') }}" class="nav-link px-2">Roles</a></li>
                @endrole
            @endauth

            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>
        </ul>
        @auth
            {{ auth()->user()->name }}&nbsp;
            <div class="text-end">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-dark me-2">Logout</a>
            </div>
        @endauth
        @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-dark me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
            </div>
        @endguest
    </nav>
    <!-- /.navbar -->
