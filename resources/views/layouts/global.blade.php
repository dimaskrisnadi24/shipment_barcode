<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('adminlte/dist/img/samita.ico') }}"
        type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- load stylesheet -->
    {{ $stylesheet }}
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('home') }}" class="navbar-brand">
                    <img src="{{asset('adminlte/dist/img/samita.png')}}" alt="Samita"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">
                        @if(!empty(\Auth::user()->user))
                            Hai - {{\Auth::user()->user}}
                        @else
                            BankSamita
                        @endif
                    </span>
                </a>

                @if(!empty(\Auth::user()->name))

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link">Home</a>
                        </li>
                        <!-- access roles -->
                        @if(\Auth::user()->roles == 1)
                        <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="{{ url('sampah') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data sampah</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                        <li><a href="{{url('tambahsampah')}}" class="dropdown-item">Tambah Data Sampah </a></li>
                        <li><a href="{{url('sampah')}}" class="dropdown-item">Lihat Data Sampah</a></li>
                        </ul>
                        </li>
                        </li>
                        @endif

                        @if(\Auth::user()->roles == 1)
                        <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="{{ url('') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Nasabah</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                        <li><a href="{{url('tambah data')}}" class="dropdown-item">Tambah Data Nasabah </a></li>
                        <li><a href="{{url('nasabah')}}" class="dropdown-item">Lihat Data Nasabah</a></li>
                        </ul>
                        </li>
                        </li>
                        @endif

                        @if(\Auth::user()->roles == 1)
                        <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="{{ url('') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Transaksi</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                        <li><a href="#" class="dropdown-item">Input Transaksi Baru </a></li>
                        <li><a href="#" class="dropdown-item">Lihat Data Transaksi</a></li>
                        </ul>
                        </li>
                        </li>
                        @endif

                        @if(\Auth::user()->roles == 1)
                        <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="{{ url('') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Laporan</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                        <li><a href="#" class="dropdown-item">Laporan Data Sampah </a></li>
                        <li><a href="#" class="dropdown-item">Laporan Data Nasabah</a></li>
                        <li><a href="#" class="dropdown-item">Laporan Transaksi </a></li>
                        </ul>
                        </li>
                        </li>
                        @endif

                        <!-- <li class="nav-item">
                            <a href="{{ url('scanner_collect') }}" class="nav-link">Scanner Collect</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @endif

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        {{ $slot }}

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">

            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="#">Bank Samita</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

    <!-- Alpine JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- load script -->
    {{ $script }}
</body>

</html>