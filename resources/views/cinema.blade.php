@extends('layouts.app')

@section('content')
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="{{ url('/') }}" class="header__logo">
								<img src="img/logo3.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{ url('/home') }}" role="button">Home</a>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="{{ url('/catalog-grid') }}">Catalog Grid</a></li>
										<li><a href="{{ url('/catalog-list') }}">Catalog List</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="{{ url('/cinema') }}" class="header__nav-link">Cinemas</a>
								</li>

								<li class="header__nav-item">
									<a href="{{ url('/about') }}" class="header__nav-link">About</a>
								</li>

								<!-- dropdown -->
								<!-- <li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										
										<li><a href="{{ url('/login') }}">Sign In</a></li>
										<li><a href="{{ url('/register') }}">Sign Up</a></li>
										<li><a href="{{ url('/error') }}">404 Page</a></li>
									</ul>
								</li> -->
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

							@if (Route::has('login'))
							
                              
                                        @auth
										@if(Auth::user()->role == 0 )
						
                                        <div style="padding:10px !important;text-transform: uppercase;">
												<a class="" style="text-decoration:none;color:white;" href="{{ url('/profile') }}"  class="p-5">
													<span>{{ Auth::user()->name }}</span>
												</a>
										</div>
										<div style="padding:10px !important;text-transform: uppercase;">
											<a class="" style="text-decoration:none;color:white;"  href="{{ route('logout') }}"
											onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
											</form>
										</div>
											
										@elseif(Auth::user()->role == 1)
										<a href="{{ url('/service-provider') }}" class="header__sign-in">
									        <i class="icon ion-ios-log-in"></i>
									        <span>Dashboard</span>
					                	</a>
										@else
										<a href="{{ url('/admin') }}" class="header__sign-in">
									        <i class="icon ion-ios-log-in"></i>
									        <span>Dashboard</span>
					                	</a>
										@endif

                                        @else
                                        <!-- <a href="{{ route('login') }}" class="header__sign-in">
									        <i class="icon ion-ios-log-in"></i>
									        <span>Log in</span>
					                	</a>  -->
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="header__sign-in">
									        <i class="icon ion-ios-log-in"></i>
									        <span>Register</span>
					                	</a>     
                                        @endif
                                        @endauth
                                        </div>
                                        @endif

					
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="{{ route('search') }}" method="GET" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<form >
								<input type="text" name="text" placeholder="Search for a movie, TV Series that you are looking for">
								<button type="submit">search</button>	
							</form>	
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Cinema's</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Cinema</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- Cinemas -->
	<div class="section">
		<div class="container">
			<div class="row">
				
				@foreach($cinema as $cm)
				<!-- Cinemas -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price ">
						<div class="price__item price__item--first"><span>{{$cm->name}}</span> <span></span></div>
						<img src="http://127.0.0.1:8000/image/{{ $cm->image }}" width="100%" height="200px" alt="">
						<div class="price__item"><span>{{$cm->address}}</span></div>
						<a href="{{ route('select_cinema',$cm->id) }}" class="price__btn">Choose Movies</a>
					</div>
				</div>
				<!-- end Cinemas -->
				
				@endforeach
			</div>
		</div>
	</div>
	<!-- end pricing -->

	<!-- features -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Cinema's Features</h2>
				</div>
				<!-- end section title -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-tv feature__icon"></i>
						<h3 class="feature__title">Gold-Class digital 3D cinema</h3>
						<p class="feature__text">Gold-Class cinema, equipped with brightest Barco projector and a state-of-the-art 7.1 channel, digital audio system.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-film feature__icon"></i>
						<h3 class="feature__title">0 Surround sound</h3>
						<p class="feature__text">Surround sound is a technique used in our cinemas for enriching the fidelity and depth of sound reproduction. </p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-globe feature__icon"></i>
						<h3 class="feature__title">Multi Language Dubbed </h3>
						<p class="feature__text">You can watch movies dubbed in urdu from different regions languages such as Tamil, English, Chinease, and more.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end features -->

<!-- partners -->
<section class="section">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<h2 class="section__title section__title--no-margin">Our Partners</h2>
			</div>
			<!-- end section title -->

			<!-- section text -->
			<div class="col-12">
				<p class="section__text section__text--last-with-margin">We believe long-term, impactful partnerships are central to achieving our mission. Therefore, we work with and alongside others to shape the world for difference </p>
			</div>
			<!-- end section text -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-md-3 col-lg-2">
				<a href="#" class="partner">
					<img src="img/partners/NotAvailible.png" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->	
		</div>
	</div>
</section>
<!-- end partners -->
<!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<!-- footer list -->
			<div class="col-12 col-md-3">
				<h6 class="footer__title">Download Our App</h6>
				<ul class="footer__app">
					<li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
					<li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
				</ul>
			</div>
			<!-- end footer list -->

			<!-- footer list -->
			<div class="col-6 col-sm-4 col-md-3">
				<h6 class="footer__title">Resources</h6>
				<ul class="footer__list">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Pricing Plan</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
			<!-- end footer list -->

			<!-- footer list -->
			<div class="col-6 col-sm-4 col-md-3">
				<h6 class="footer__title">Legal</h6>
				<ul class="footer__list">
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<!-- end footer list -->

			<!-- footer list -->
			<div class="col-12 col-sm-4 col-md-3">
				<h6 class="footer__title">Contact</h6>
				<ul class="footer__list">
					<li><a href="tel:">+92 (335) 5254866</a></li>
					<li><a href="mailto:">support@bookyourshowz.com</a></li>
				</ul>
				<ul class="footer__social">
					<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
					<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
					<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
					<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
				</ul>
			</div>
			<!-- end footer list -->

			<!-- footer copyright -->
			<div class="col-12">
				<div class="footer__copyright">
					<small><a target="_blank" href="#">Book Your ShowZ</a></small>

					<ul>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<!-- end footer copyright -->
		</div>
	</div>
</footer>
<!-- end footer -->
@endsection