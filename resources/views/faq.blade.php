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
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
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
						<h2 class="section__title">FAQ</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">FAQ</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- faq -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">Why is a Video is not loading?</h3>
						<p class="faq__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
						<p class="faq__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Why isn't there a HD version of this video?</h3>
						<p class="faq__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Why is the sound distorted?</h3>
						<p class="faq__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Why is the Video stuttering, buffering or randomly stopping?</h3>
						<p class="faq__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">When I change the quality of a video, nothing happens.</h3>
						<p class="faq__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">Why isn't the video starting at the beginning?</h3>
						<p class="faq__text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">How do I make the Video go Fullscreen?</h3>
						<p class="faq__text">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">What Browsers are supported?</h3>
						<p class="faq__text">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">How do you handle my privacy?</h3>
						<p class="faq__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">How can I contact you?</h3>
						<p class="faq__text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end faq -->

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