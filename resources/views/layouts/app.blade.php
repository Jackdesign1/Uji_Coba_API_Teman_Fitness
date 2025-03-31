<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
    
        <div class="sidebar-brand-icon">
            <i class="fas fa-dumbbell"></i> <!-- Ganti ikon sesuai tema gym -->
        </div>
        <div class="sidebar-brand-text mx-3">Teman Fitness</div>
    </a>

    <hr class="sidebar-divider">



    <!-- Aktivasi Member -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pendaftaran-member') }}">
            <i class="fas fa-user-plus"></i>
            <span>Pendaftaran Member</span>
        </a>
    </li>

    <!-- Data Member -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/members') }}">
            <i class="fas fa-users"></i>
            <span>Data Member</span>
        </a>
    </li>

<!-- Data Mentor -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/mentors') }}">
            <i class="fas fa-users"></i>
            <span>Data Mentor</span>
        </a>
    </li>


    <!-- Data Kelas -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/kelas') }}">
            <i class="fas fa-users"></i>
            <span>Data Kelas</span>
        </a>
    </li>
    <!-- Data Workout -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/workouts') }}">
            <i class="fas fa-users"></i>
            <span>Data Workout</span>
        </a>
    </li>

    
<li class="nav-item">
    <a class="nav-link" href="{{ url('/company-profile') }}">
        <i class="fas fa-building"></i>
        <span>Company Profile</span>
    </a>
</li>





    <hr class="sidebar-divider">
</ul>
<!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Main Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
