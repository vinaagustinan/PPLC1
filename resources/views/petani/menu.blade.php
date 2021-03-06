<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Halaman Petani</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('CoolAdmin/asset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('CoolAdmin/asset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('CoolAdmin/asset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('CoolAdmin/asset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('CoolAdmin/asset/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="{{asset('CoolAdmin/asset/images/icon/logo.png')}}" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/homePetani">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/petaniRendemen">
                                <i class="fas fa-copy"></i>Data Rendemen</a>
                        </li>
                        <li>
                            <a href="/petaniAntrian">
                                <i class="fas fa-copy"></i>Data Antrian</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <!-- <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <a href="/notifikasi">
                                            <i class="zmdi zmdi-notifications"></i></a>
                                    </div>
                                </div> -->
                                <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a href="">
                                            <div class="fa fa-user fa-lg" aria-hidden="true">
                                                <i class="js-acc-btn" href="#"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="/akunPetani">
                                                    <i class="zmdi zmdi-account"></i>My Profile</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="{{route('password.change')}}">
                                                    <i class="fas fa-cog"></i>Ubah Password</a>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
            @yield('akun')
            @yield('home')
            @yield('dataRendemen')
            @yield('dataAntrian')
            @yield('content')
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div> -->
           
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('CoolAdmin/asset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('CoolAdmin/asset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('CoolAdmin/asset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('CoolAdmin/asset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('CoolAdmin/asset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('CoolAdmin/asset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('CoolAdmin/asset/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('CoolAdmin/asset/js/main.js')}}"></script>

</body>
</html>

