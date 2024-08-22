<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="light" data-bs-theme="light">


<head>
    @include('components/header')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/lab.jpeg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/lab.jpeg') }}" alt="" height="22">
                    </span>
                </a>
                <a href="{{ url('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/lab.jpeg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img class="" src="{{ asset('assets/images/lab.jpeg') }}" alt=""
                            height="35">
                        <span class="ms-2 text-light fs-5 fw-semibold ">E - filling</span>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <!-- Sidebar -->
                @include('components.sidebar')
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- Navbar -->
        @include('components.navbar')
        <!-- Navbar End -->




        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            @include('components.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    @include('components.setting')
</body>

</html>
