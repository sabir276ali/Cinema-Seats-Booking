<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/owl.carousel.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/nouislider.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/ionicons.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/plyr.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/photoswipe.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/default-skin.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="http://127.0.0.1:8000/icon/BYSZ 32X32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="http://127.0.0.1:8000/icon/BYSZ 32X32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://127.0.0.1:8000/icon/BYSZ  72X72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://127.0.0.1:8000/icon/BYSZ Icon 144X144.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://127.0.0.1:8000/icon/BYSZ Icon 144X144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content=" ">
	<title>Bookyourshowz – Online Movies Ticket Booking </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bookyourshowz – Online Movies Ticket Booking') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    
</head>
<body class="body">
    @yield('content')
</body>
<script src="http://127.0.0.1:8000/js/jquery-3.3.1.min.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/js/owl.carousel.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.mousewheel.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="http://127.0.0.1:8000/js/wNumb.js"></script>
    <script src="http://127.0.0.1:8000/js/nouislider.min.js"></script>
    <script src="http://127.0.0.1:8000/js/plyr.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.morelines.min.js"></script>
    <script src="http://127.0.0.1:8000/js/photoswipe.min.js"></script>
    <script src="http://127.0.0.1:8000/js/photoswipe-ui-default.min.js"></script>
    <script src="http://127.0.0.1:8000/js/main.js"></script>
</html>
