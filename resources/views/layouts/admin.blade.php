<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags-->
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content=" ">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin</title>
    
    <!-- Favicons -->
	<link rel="icon" type="image/png" href="http://127.0.0.1:8000/icon/BYSZ 32X32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="http://127.0.0.1:8000/icon/BYSZ 32X32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://127.0.0.1:8000/icon/BYSZ  72X72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://127.0.0.1:8000/icon/BYSZ Icon 144X144.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://127.0.0.1:8000/icon/BYSZ Icon 144X144.png">

    <!-- Fontfaces CSS-->
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="http://127.0.0.1:8000/ServiceProviderAssets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/admin">
                            <!-- <img src="images/icon/" alt="Admin" /> -->
                            Dashboard
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                        <a href="/admin"><i class="fas fa-tachometer-alt"></i>Dashboard</a></a>
                        <li>
                            <a href="chart.html">
                                <!-- <i class="fas fa-chart-bar"></i>-->
                                Movies</a> 
                        </li>
                        <li>
                            <a href="{{ route('admin.booking.index') }}">
                                <!-- <i class="fas fa-chart-bar"></i>-->
                                Bookings</a> 
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/admin">
                    <!-- <img src="http://127.0.0.1:8000/" alt="Admin" /> -->
                Dashboard
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                        <a href="/admin">
                        <!-- <i class="fas fa-tachometer-alt"></i> -->
                        Dashboard</a></a>
                        <li>
                        <li>
                            <a href="{{route('Admin.movies.index')}}">
                                <!-- <i class="fas fa-chart-bar"></i> -->
                                Movies</a>
                        </li>
                        <li>
                            <a href="{{route('Admin.cinemas.index')}}">
                                <!-- <i class="fas fa-chart-bar"></i> -->
                                Cinemas</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.booking.index') }}">
                                <!-- <i class="fas fa-chart-bar"></i>-->
                                Booking</a> 
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">
                                <!-- <i class="fas fa-chart-bar"></i>-->
                                User</a> 
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <!-- <i class="fas fa-copy"></i> -->
                                Pages</a>
                      <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                            </ul>
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
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <!-- <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <!-- <div class="image">
                                            <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div> -->
                                        <div class="content">
                                            <a class="js-acc-btn" href="">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>          
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                                </form>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

 
</body>
    
    <!-- Jquery JS-->
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/slick/slick.min.js">
    </script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/wow/wow.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/animsition/animsition.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="http://127.0.0.1:8000/ServiceProviderAssets/js/main.js"></script>

   </html>
<!-- end document-->
