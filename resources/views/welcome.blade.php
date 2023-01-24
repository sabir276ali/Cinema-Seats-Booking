<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/BYSZ 32X32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/BYSZ 32X32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/BYSZ  72X72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/BYSZ Icon 144X144.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/BYSZ Icon 144X144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content=" ">
	<title>Bookyourshowz – Online Movies Ticket Booking </title>
    </head>
    <body class="body">
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

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/1.jpg"></div>
			<div class="item home__cover" data-bg="img/home/2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/4.jpg"></div>
			<!-- <div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div> -->
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>Trending ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
					@foreach($featured as $f)	
					<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="http://127.0.0.1:8000/image/{{$f->image}}" alt="">
									<!-- <a href="{{ route('detail.show',$f->id) }}" class="card__play">
										<img src="img/book2.png" alt="">
									</a> -->
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$f->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$f->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>
									<?php $data=\App\Models\Rating::select(Illuminate\Support\Facades\DB::raw('avg(star_rating) as avg'))->where('m_id',$f->id)->groupBy('m_id')->orderBy('avg','desc')->get(); ?>
									{{
										number_format((float)($data[0]->avg), 1)
										
									}}
								</span>
								</div>
							</div>
							<!-- end card -->
					</div>
				@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- Content Now Playing -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Now Playing</h2>
						<!-- end content title -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>
		<!-- Now Playing -->
		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- start card -->
						@foreach($now_playing as $m)
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="http://127.0.0.1:8000/image/{{$m->image}}" alt="">
								@guest
								<a href="{{ url('/login') }}" class="card__play">
										<img src="img/book2.png" alt="">
									</a>
								@else
									<a href="{{ route('detail.show',$m->id) }}" class="card__play">
										<img src="img/book2.png" alt="">
									</a>
								@endguest
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$m->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$m->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>
									<?php $data1=\App\Models\Rating::select(Illuminate\Support\Facades\DB::raw('avg(star_rating) as avg'))->where('m_id',$m->id)->groupBy('m_id')->get(); ?>
									@if(!empty($data1[0]))
											{{$rating=number_format((float)($data1[0]->avg), 1)}}
										
									@else
										5
									@endif
								</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					    @endforeach
							<!-- section btn -->
						<!--  -->
							<div class="col-lg-12">
								<form action="">
								<a href="{{ url('/catalog-grid') }}" class="section__btn">Show All</a>
							    </form>
					    	</div>
						<!--  -->
						
				<!-- end section btn -->
					</div>
				</div>
			</div>
			<!-- end Content Now Playing tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- Opening This Week -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Opening This Week</h2>
				</div>
				<!-- end section title -->

				@foreach($This_week as $m)
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="http://127.0.0.1:8000/image/{{$m->image}}" alt="">
									<form action="">
									@guest
									<a href="{{ url('/login') }}" class="card__play">
											<img src="img/book2.png" alt="">
										</a>
									@else
									<a href="{{ route('detail.show',$m->id) }}" class="card__play">
										<img src="img/book2.png" alt="">
									</a>
									@endguest
									</form>
									

								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$m->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$m->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>
									<?php $data1=\App\Models\Rating::select(Illuminate\Support\Facades\DB::raw('avg(star_rating) as avg'))->where('m_id',$m->id)->groupBy('m_id')->get(); ?>
									@if(!empty($data1[0]))
											{{$rating=number_format((float)($data1[0]->avg), 1)}}
										
									@else
										5
									@endif
								</span>
							 </div>
						</div>
					</div>
				<!-- end card -->
				@endforeach
				<!--  -->
				<div class="col-lg-12">
								<form action="">
								<a href="{{ url('/catalog-grid') }}" class="section__btn">Show All</a>
							    </form>
				</div>

				<!-- {!! $movie->links('pagination') !!} -->
				<!--  -->

			</div>
		</div>
	</section>
	<!-- Opening This Week-->

	<!-- Comming Soon Week -->
	<section class="section section--bg" data-bg="img/section/comingsoon2.png">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Comming Soon</h2>
				</div>
				<!-- end section title -->
				<!-- content Cards -->
				<!-- card -->
				
				@foreach($comming_soon as $m)
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="http://127.0.0.1:8000/image/{{$m->image}}" alt="">
									@guest
									<a href="{{ url('/login') }}" class="card__play">
											<img src="img/book2.png" alt="">
										</a>
									@else
										<a href="{{ route('detail.show',$m->id) }}" class="card__play">
											<img src="img/book2.png" alt="">
										</a>
									@endguest
									</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$m->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$m->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>
									<?php $data1=\App\Models\Rating::select(Illuminate\Support\Facades\DB::raw('avg(star_rating) as avg'))->where('m_id',$m->id)->groupBy('m_id')->get(); ?>
									@if(!empty($data1[0]))
											{{$rating=number_format((float)($data1[0]->avg), 1)}}
										
									@else
										5
									@endif
								</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					    @endforeach
			<!--  -->
			<div class="col-lg-12">
								<form action="">
								<a href="{{ url('/catalog-grid') }}" class="section__btn">Show All</a>
							    </form>
					    	</div>
			<!--  -->
			</div>
		</div>
	</section>
	<!-- Comming Soon -->
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

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
