<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{!! url('assets/dist/img/AdminLTELogo.png') !!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Alghars</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{!! url('assets/dist/img/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    @auth
                        {{ auth()->user()->name }}&nbsp;
                    @endauth
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-closed">
                    <a href="#" class="nav-link active">

                        <i class="nav-icon fa-solid fa-user-gear"></i>
                        <p>
                            Manage your Account
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @role('student')
                            <li class="nav-item">
                                <a href="/student/{{ Auth::user()->id }}/show" class="nav-link active">
                                    <i class="nav-icon fa-solid fa-user"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/show" class="nav-link active">
                                    <i class="nav-icon fa-solid fa-user"></i>
                                    <p>Profile </p>
                                </a>
                            </li>
                        @endrole
                    </ul>
                </li>
                <li class="nav-item menu-closed">
                    <a href="#" class="nav-link active">

                        <i class="nav-icon fa fa-solid fa-list-check"></i>
                        <p>
                            Actions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @role('admin')
                            <li class="nav-item">
                                <a href="/admin/assign/screenuser/students" class="nav-link active">
                                    <i class="fa fa-arrow-right-to-bracket nav-icon" aria-hidden="true"></i>
                                    <p>Assign for evaluation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/view/evaluated" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                                    <p>For Evaluation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/users/create-course" class="nav-link active">
                                    <i class="fa fa-people-group nav-icon"></i>
                                    <p>Create Classes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/users/manage-classes" class="nav-link active">
                                    <i class="fa fa-user-group  nav-icon"></i>
                                    <p>Manage Classes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{ url('/') }}/admin/users" class="nav-link active">
                                    {{-- <a href="{{ route('users.create') }}" class="nav-link active"> --}}
                                    <i class="fa fa-users nav-icon" aria-hidden="true"></i>
                                    <p>Manage Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{ route('users.create') }}" class="nav-link active">
                                    <i class="fa fa-user-plus nav-icon" aria-hidden="true"></i>
                                    <p>Add New User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                                    <p>View Students</p>
                                </a>
                            </li>
                        @endrole
                        @role('screenuser')
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link active">
                                    <i class="fa fa-users nav-icon" aria-hidden="true"></i>
                                    <p>My Students</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/student/evaluate/list" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                                    <p>For Evaluation</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link active">
                                    <i class="fa fa-people-group nav-icon" aria-hidden="true"></i>
                                    <p>Reports</p>
                                </a>
                            </li> --}}
                        @endrole

                        @role('teacher')
                            <li class="nav-item">
                                <a href="/admin/fetch/classes" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon " aria-hidden="true"></i>
                                    <p>View Schedule</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                                    <p>Manage Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link active">
                                    <i class="fa-solid fa-flag" aria-hidden="true"></i>
                                    <p>Progress Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/feedback" class="nav-link active">
                                    <i class="fa fa-solid fa-comment" aria-hidden="true"></i>
                                    <p>Feedback</p>
                                </a>
                            </li>
                            <li id="events" class="nav-item  has-treeview">

                                <a href="/admin/calendar" class="nav-link active">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                        Upcoming Classes
                                    </p>
                                </a>
                            </li>
                        @endrole
                        @role('student')
                            <li class="nav-item">
                                <a href="/student/{{ Auth::user()->id }}/show" class="nav-link active">
                                    {{-- <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i> --}}
                                    <i class="fa fa-user nav-icon" aria-hidden="true"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/student/{{ Auth::user()->id }}/calendar" class="nav-link active">
                                    {{-- <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i> --}}
                                    <i class="fa fa-calendar nav-icon" aria-hidden="true"></i>
                                    <p>Events</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/pick-evaluation" class="nav-link active">
                                    {{-- <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i> --}}
                                    <i class="fa fa-line-chart nav-icon" aria-hidden="true"></i>
                                    <p>Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/pick-evaluation" class="nav-link active">
                                    <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                                    <p>Classes</p>
                                </a>
                            </li>
                        @endrole
                    </ul>
                </li>
                <li id="events" class="nav-item  has-treeview">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            Activity Logs
                        </p>
                    </a>
                </li>
                @role('student')
                {{-- Nothing to be displayed here as of now --}}
                @else
                {{-- <li id="events" class="nav-item  has-treeview">

                    <a href="/admin/create" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Add New Users
                        </p>
                    </a>
                </li> --}}
                @endrole
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
