@extends('main')

@section('content')
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">{{ auth()->user()->username ?? auth()->user()->nama_siswa }}</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::url() == route('dashboard') ? 'text-primary' : '' }}">Dashboard</a>
                </li>
                </li>
            </ul>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;">
            <h5 class="text-center text-white py-4">
                Dashboard spp</h5>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    @auth
                        @if (auth()->user()->level == 'admin')
                            <div class="kelola-data">
                                <li class="nav-header text-uppercase text-sm">main data</li>
                                <li class="nav-item">
                                    <a href="{{ route('siswa.index') }}"
                                        class="nav-link {{ Request::url() == route('siswa.index') ? 'active' : '' }}">
                                        <p class="">
                                            data siswa
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kelas.index') }}"
                                        class="nav-link {{ Request::url() == route('kelas.index') ? 'active' : '' }}">
                                        <p class="">
                                            data kelas
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('spp.index') }}"
                                        class="nav-link {{ Request::url() == route('spp.index') ? 'active' : '' }}">
                                        <p class="">
                                            data spp
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}"
                                        class="nav-link {{ Request::url() == route('user.index') ? 'active' : '' }}">
                                        <p class="">
                                            data user
                                        </p>
                                    </a>
                                </li>
                            </div>
                        @endif
                        <div class="transaksi">
                            <li class="nav-header text-uppercase text-sm">transaksi</li>
                            @if (auth()->user()->level == 'petugas')
                                <li>
                                    <a href="{{ route('pembayaran.index') }}"
                                        class="nav-link {{ Request::url() == route('pembayaran.index') ? 'active' : '' }}">
                                        <p class="">
                                            Entry data transaksi
                                        </p>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('histori') }}"
                                    class="nav-link {{ Request::url() == route('histori') ? 'active' : '' }}">
                                    History transaksi
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="nav-link text-danger ">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </div>
                    @endauth
                </ul>
            </nav>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $pageTitle ?? 'Dashboard data' }}</h1>
                        </div><!-- /.col -->
                        @yield('header')
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('main-content')
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@endsection
