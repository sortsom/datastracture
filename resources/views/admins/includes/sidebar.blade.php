
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('admin/dist/img/logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v2</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>
                        TEACHER
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>
                        STUDENTS
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Students Item</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Parents Item</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-book-reader"></i>
                    <p>
                        Faculty
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/flot.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Faculty</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-id-card-alt"></i>
                    <p>
                        Room
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/UI/general.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Room item</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-poll"></i>
                    <p>Survey</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{asset('attendants.attendant')}}" class="nav-link">
                    <i class="far fa-address-book"></i>
                    <p>Attendants</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-retweet"></i>
                    <p>
                        Reports
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <p>Setting</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
