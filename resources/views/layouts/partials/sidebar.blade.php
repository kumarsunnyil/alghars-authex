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
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Manage your Account
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/{{ Auth::user()->id }}/show" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-closed">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Actions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @role('admin')
                            <li class="nav-item">
                                <a href="/admin/assign/screenuser/students" class="nav-link">
                                    {{-- <i class="far fa-person-chalkboard nav-icon"></i> --}}
                                    <i class="fa fa-users" aria-hidden="true" style="color:#268bd3"></i>
                                    <p>Assign to ScreenUser</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-user nav-icon"></i>
                                    <p>Teacher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Student</p>
                                </a>
                            </li>
                        @endrole
                        @role('screenuser')
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Students</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Reports</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/student/evaluate/list" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Evaluation</p>
                                </a>
                            </li>
                        @endrole

                        @role('teacher')
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>View Schedule</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Manage Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Progress Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/all/students" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Feedback</p>
                                </a>
                            </li>
                        @endrole
                        @role('student')
                            <li class="nav-item">
                                <a href="/student/{{ Auth::user()->id }}/show" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Profile {{auth()->id()}}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/student/{{ Auth::user()->id }}/calendar" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Accept Evaluation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/pick-evaluation" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Progress Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/{{ Auth::user()->id }}/pick-evaluation" class="nav-link">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p>Classes</p>
                                </a>
                            </li>
                        @endrole

                    </ul>
                </li>

                {{-- Events --}}
                <li id="events" class="nav-item  has-treeview">

                    <a href="/admin/calendar" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                            Upcoming Events
                        </p>
                    </a>
                </li>
                <li id="events" class="nav-item  has-treeview">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-pencil-square"></i>
                        <p>
                            Classes
                        </p>
                    </a>
                </li>
                <li id="events" class="nav-item  has-treeview">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            Activity Logs
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
