<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RP Farma</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    @yield('styles')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-black">
            <div class="container-fluid">
                <a href="{{ url('dashboard') }}" class="navbar-brand">
                    <img src="{{ asset('dist/img/logo.png') }}" alt="AdminLTE Logo"
                        class="brand-image" style="opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-5 navbar-nav navbar-no-expand ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Recetas Dermatológicas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Recetas de Jarabe</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/usuarios') }}" class="nav-link">Usuarios</a>
                        </li>
                    </ul>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Imagen de Usuario" class="img-circle img-size-32 mr-2">
                            {{ Auth::user()->name  }}
                        </a>    
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    <i class="fas fa-power-off mr-2"></i> Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')
            
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}

    @yield('scritps')
</body>

</html>
