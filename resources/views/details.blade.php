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
								<img src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/logo3.png" alt="">
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

    
	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				@if ($errors->any())
					<div class="details__title">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
					</div>
				@endif 
				@if (session('success'))
							<div class="details__title" role="alert">
								{{ session('success') }}
							</div>
				@endif
				<div class="col-12">
					<h1 class="details__title">{{ $movie->title }}</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
									<img src="http://127.0.0.1:8000/image/{{$movie->image}}" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <a href="#">{{ $movie->genre }}</a>
										<a href="#">Triler</a></li>
										<li><span>Release year:</span> {{ $movie->releasing_year }}</li>
										<li><span>Running time:</span> {{ $movie->total_minutes }}</li>
										<li><span>Country:</span> <a href="#">{{ $movie->country }}</a> </li>
									</ul>

									<div class="card__description card__description--details">
									{{ $movie->description }}
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->
				
				<!-- player -->
				<div class="col-12 col-xl-6">
				<iframe 
				width="560" 
				height="315" 
				src="{{ $movie->link  }}" 
				title="YouTube video player" 
				frameborder="0" 
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
				</iframe>	
				</div>
				<!-- end player -->

			<style>
				.btn-review{
				padding:5px;
				width:100px;
				background-color:white;
				border:2px solid white;
				}
				.rate {
					float: left;
					height: 46px;
					padding: 0 10px;
					}
					.rate:not(:checked) > input {
					position:absolute;
					display: none;
					}
					.rate:not(:checked) > label {
					float:right;
					width:1em;
					overflow:hidden;
					white-space:nowrap;
					cursor:pointer;
					font-size:30px;
					color:#ccc;
					}
					.rated:not(:checked) > label {
					float:right;
					width:1em;
					overflow:hidden;
					white-space:nowrap;
					cursor:pointer;
					font-size:30px;
					color:#ccc;
					}
					.rate:not(:checked) > label:before {
					content: '★ ';
					}
					.rate > input:checked ~ label {
					color: #ffc700;
					}
					.rate:not(:checked) > label:hover,
					.rate:not(:checked) > label:hover ~ label {
					color: #deb217;
					}
					.rate > input:checked + label:hover,
					.rate > input:checked + label:hover ~ label,
					.rate > input:checked ~ label:hover,
					.rate > input:checked ~ label:hover ~ label,
					.rate > label:hover ~ input:checked ~ label {
					color: #c59b08;
					}
					.star-rating-complete{
						color: #c59b08;
					}
					.rating-container .form-control:hover, .rating-container .form-control:focus{
					background: #fff;
					border: 1px solid #ced4da;
					}
					.rating-container textarea:focus, .rating-container input:focus {
					color: #000;
					}
					.rated {
					float: left;
					height: 46px;
					padding: 0 10px;
					}
					.rated:not(:checked) > input {
					position:absolute;
					display: none;
					}
					.rated:not(:checked) > label {
					float:right;
					width:1em;
					overflow:hidden;
					white-space:nowrap;
					cursor:pointer;
					font-size:30px;
					color:#ffc700;
					}
					.rated:not(:checked) > label:before {
					content: '★ ';
					}
					.rated > input:checked ~ label {
					color: #ffc700;
					}
					.rated:not(:checked) > label:hover,
					.rated:not(:checked) > label:hover ~ label {
					color: #deb217;
					}
					.rated > input:checked + label:hover,
					.rated > input:checked + label:hover ~ label,
					.rated > input:checked ~ label:hover,
					.rated > input:checked ~ label:hover ~ label,
					.rated > label:hover ~ input:checked ~ label {
					color: #c59b08;
					}
			</style>  

            <div class="col-12">
					<div class="details__wrap">
						<!-- availables -->
						<div class="details__devices">
							<span class="details__devices-title">Press Button to Book your Ticket :</span>
							<ul class="details__devices-list">
								<li>
								@guest
								<a  class="section__btn" href="{{ url('/login') }}" >Book Ticket</a>
								@else
								<a  class="section__btn" href="{{ url('seating',$movie->id) }}" >Book Ticket</a>
								@endguest
								
								</li>
							</ul>
						</div>
						
						<!-- end availables -->

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title" style="padding-left:10px;">Review:</span>
                            @if(!empty($value->star_rating))
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                             <div class="form-group row">
                                                <input type="hidden" name="booking_id" value="{{ $value->id }}">
                                                <div class="col">
                                                   <div class="rated">
                                                    @for($i=1; $i<=$value->star_rating; $i++)
                                                      {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                      <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                                    @endfor
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                    <p>{{ $value->comments }}</p>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                @else
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" action="{{route('rate.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                             @csrf
                                             <div class="form-group row">
                                                <input type="hidden" name="m_id" value="{{ $movie->id }}">
                                                <div class="col">
                                                   <div class="rate">
                                                      <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                      <label for="star5" title="text">5 stars</label>
                                                      <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                                      <label for="star4" title="text">4 stars</label>
                                                      <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                      <label for="star3" title="text">3 stars</label>
                                                      <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                      <label for="star2" title="text">2 stars</label>
                                                      <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                                      <label for="star1" title="text">1 star</label>
                                                   </div>
                                                </div>
                                             </div>
											<div class="header__search-content">
												 <input  name="comment" rows="6 " placeholder="Comment" maxlength="200">
											
											</div>
                                             
                                           <button class="btn-review">Submit </button>
                                           
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
						</div>
						<!-- end share -->
					</div>
				</div>
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="content__title">Castors</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- comments -->
								<div class="col-3">
									<div class="comments__autor ">
														<img class="comments__avatar" src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="">
														<span class="comments__name">Fahad mustafa</span>
														<span class="comments__time">Acter</span>
									</div>	
								</div>
								<div class="col-3">
									<div class="comments__autor ">
														<img class="comments__avatar" src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="">
														<span class="comments__name">Fahad mustafa</span>
														<span class="comments__time">Acter</span>
									</div>	
								</div>
								<div class="col-3">
									<div class="comments__autor ">
														<img class="comments__avatar" src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="">
														<span class="comments__name">Fahad mustafa</span>
														<span class="comments__time">Acter</span>
									</div>	
								</div>
								<div class="col-3">
									<div class="comments__autor ">
														<img class="comments__avatar" src="http://127.0.0.1:8000/ServiceProviderAssets/images/icon/avatar-big-01.png" alt="">
														<span class="comments__name">Fahad mustafa</span>
														<span class="comments__time">Acter</span>
									</div>	
								</div>
								

								<!-- end comments -->
							</div>
						</div>
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				
				<!-- <div class="col-12 col-lg-4 col-xl-4">
					<div class="row"> -->
						<!-- section title -->
						<!-- <div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div> -->
						<!-- end section title -->

						<!-- card -->
						<!-- <div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/cover.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div> -->
						<!-- end card -->

						<!-- card -->
						<!-- <div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/cover2.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div> -->
						<!-- end card -->
					</div>
				</div>

				<!-- end sidebar -->
			</div>
		</div>
	</section>
	<!-- end content -->

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

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
@endsection



<!-- Another player extra -->
<!-- <video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player"> -->
						<!-- Video files -->
						<!-- <source src="https://www.youtube.com/embed/pEWqOAcYgpQ" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440"> -->

						<!-- Caption files -->
						<!-- <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
						    default>
						<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"> -->

						<!-- Fallback for browsers that don't support the <video> element -->
						<!-- <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a> -->
<!-- </video> -->