@extends('layouts.app')
@section('content')
<!-- header -->
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
									<a href="{{url('help')}}" class="header__nav-link">Help</a>
								</li>

								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="{{ url('/about') }}">About</a></li>
										<li><a href="{{ url('/login') }}">Sign In</a></li>
										<li><a href="{{ url('/register') }}">Sign Up</a></li>
										<li><a href="{{ url('/error') }}">404 Page</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

							@if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        <a href="{{ url('/home') }}" class="header__sign-in">
									        <i class="icon ion-ios-log-in"></i>
									        <span>Home</span>
					                	</a>
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

							</div>
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
						<h2 class="section__title">Catalog list</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Catalog list</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<form  action="{{ route('filter') }}" method="GET">
		<div class="filter">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="filter__content">
							<div class="filter__items">
							
							<!-- filter item -->
								<div class="filter__item" id="filter__genre">
									<span class="filter__item-label">GENRE:</span>

									<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<input type="button" id="genre" value="Action">
										<span></span>
									</div>

									<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
										<li>Action</li>
										<li>Animals</li>
										<li>Animation</li>
										<li>Biography</li>
										<li>Comedy</li>
										<li>Cooking</li>
										<li>Dance</li>
										<li>Documentary</li>
										<li>Drama</li>
										<li>Education</li>
										<li>Entertainment</li>
										<li>Family</li>
										<li>Fantasy</li>
										<li>History</li>
										<li>Horror</li>
										<li>Independent</li>
										<li>International</li>
										<li>Kids</li>
										<li>Kids & Family</li>
										<li>Medical</li>
										<li>Military/War</li>
										<li>Music</li>
										<li>Musical</li>
										<li>Mystery/Crime</li>
										<li>Nature</li>
										<li>Paranormal</li>
										<li>Politics</li>
										<li>Racing</li>
										<li>Romance</li>
										<li>Sci-Fi/Horror</li>
										<li>Science</li>
										<li>Science Fiction</li>
										<li>Science/Nature</li>
										<li>Spanish</li>
										<li>Travel</li>
										<li>Western</li>
									</ul>
								</div>
								<!-- end filter item -->

								<!-- filter item -->
								<!-- <div class="filter__item" id="filter__quality">
									<span class="filter__item-label">QUALITY:</span>

									<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<input type="button" id="quality" value="HD 1080">
										<span></span>
									</div>

									<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
										<li>HD 1080</li>
										<li>HD 720</li>
										<li>DVD</li>
										<li>TS</li>
									</ul>
								</div> -->
								<!-- end filter item -->

								<!-- filter item -->
								<div class="filter__item" id="filter__rate">
									<span class="filter__item-label">IMBd:</span>

									<div class="filter__item-btn dropdown-toggle"  role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="filter__range">
											<div id="filter__imbd-start"></div>
											<div id="filter__imbd-end"></div>
										</div>
										<span></span>
									</div>

									<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
										<div id="filter__imbd"></div>
									</div>
								</div>
								<!-- end filter item -->

								<!-- filter item -->
								<div class="filter__item" id="filter__year">
									<span class="filter__item-label">RELEASE YEAR:</span>

									<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="filter__range">
											<div id="filter__years-start"></div>
											<div id="filter__years-end"></div>
										</div>
										<span></span>
									</div>

									<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
										<div id="filter__years" ></div>
									</div>
								</div>
								<!-- end filter item -->
							</div>
							<!-- filter btn -->
							<button class="filter__btn" type="button" onclick="myFunction()">apply filter</button>
							<!-- end filter btn -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end filter -->

	<script>
	function myFunction() {
		
		var start_year = document.getElementById("filter__years-start").innerText;
	
		var end_year = document.getElementById("filter__years-end").innerText;

		var genre=document.getElementById("genre").value;
	
		var start_rating=document.getElementById("filter__imbd-start").innerText;

		var end_rating=document.getElementById("filter__imbd-end").innerText;
		
		window.location.href = `http://127.0.0.1:8000/filter?start_year=${start_year}&end_year=${end_year}&genre=${genre}&start_rating=${start_rating}&end_rating=${end_rating}`;
		
		
		
		// var quality=document.getElementById("quality").value;
		// document.getElementById("demo4").innerHTML = "genre value: " + quality;


		
		

     }

	</script>
	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
				
			
			   <!-- card -->
			   @foreach($movie as $m)
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
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
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$m->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$m->genre}}</a>
										<a href="#">Triler</a>
									</span>

									<div class="card__wrap">
									<span class="card__rate"><i class="icon ion-ios-star"></i>
									<?php $data1=\App\Models\Rating::select(Illuminate\Support\Facades\DB::raw('avg(star_rating) as avg'))->where('m_id',$m->id)->groupBy('m_id')->get(); ?>
									@if(!empty($data1[0]))
											{{$rating=number_format((float)($data1[0]->avg), 1)}}
										
									@else
										5
									@endif
								</span>

										<!-- <ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul> -->
									</div>

									<div class="card__description">
										<p>{{$m->description}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
				@endforeach
				<!-- end card -->
			   
				<!-- paginator -->
				{{ $movie->links('pagination') }}
				<!-- end paginator -->
				
			</div>
		</div>
	</div>
	<!-- end catalog -->
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