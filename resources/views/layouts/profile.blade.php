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
    <title>Service Provider</title>
    
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
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="{{url('/')}}">
                            <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/logo3.png" width="150px" alt="CoolAdmin" />
                        </a>
                    </div>
                <div class="header__navbar">
                        <ul class="list-unstyled"></ul>
                    </div> 
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <!-- <div class="image">
                                    <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="John Doe" />
                                </div> -->
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <!-- <div class="image">
                                            <a href="#">
                                                <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="John Doe" />
                                            </a>
                                        </div> -->
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->name }}</a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }}</span>
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
        </header>
    
        <div class="sub-header-mobile-2 d-block d-lg-none">
           
              <div class="header-button-item has-noti js-item-menu">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{Auth::user()->name}}</a>
                                    </h5>
                                    <span class="email">{{Auth::user()->email}}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
          

        @yield('content')


        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2022 BookYourShowZ. All rights reserved. by <a href="https://BookYourShowZ.com">BookYourShowZ</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         <!-- END COPYRIGHT-->
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
