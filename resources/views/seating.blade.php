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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- home -->
		<section class="home">
			<!-- home bg -->
			<div class="owl-carousel home__bg">
				<div class="item home__cover" data-bg="http://127.0.0.1:8000/img/home/home__bg.jpg"></div>
				<div class="item home__cover" data-bg="http://127.0.0.1:8000/img/home/home__bg2.jpg"></div>
				<div class="item home__cover" data-bg="http://127.0.0.1:8000/img/home/home__bg3.jpg"></div>
				<div class="item home__cover" data-bg="http://127.0.0.1:8000/img/home/home__bg4.jpg"></div>
			</div>
			<!-- end home bg -->
			<!-- details -->
		<!-- details background -->
		<div class="details__bg" data-bg="http://127.0.0.1:8000/img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title">Book Your Cinema Seat </h1>
				</div>
				<!-- end title -->
				<input type="text" name="id" id="movie_id_2" style="display:none;" value="{{$movie->id}}">
				
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
							<input type="hidden" id="movie_id" value="{{$movie->id}}">
							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								
								<!-- Movies Title -->
								<div class="col-12">

									<h2 style="color:white ;" >{{$movie->title}}</h2>
								</div>
								<!-- ENd of title -->
								<!-- Date Select -->
								<div class="col-md-8">
									<!-- <label for="date" class="form-label details__devices-title">Date:</label>
									<input class="date_picker col-12" id="date_1" type="date"> -->
									<label for="date" class="form-label details__devices-title">Date:</label>
									<select class="date_picker col-12" name="date" id="date_1" required>
									  <option value="">Choose...</option>
									 @foreach($date as $dt)
									  <option value="{{$dt->date}}">{{$dt->date}}</option>
									 @endforeach
									</select>
									<div class="invalid-feedback details__devices-title">
									  Please select a valid Date.
									</div>
								</div>
								<!-- End Date -->
								<script>
								$(document).ready(function(){
									$("select[name='date']").change(function(){
									// console.log("Nothing");
									let date=$(this).val();
									var url ="get_date/"+date;
										
										$.ajax({
											url: url,
											type: "GET",
											cache: false,
											data:{
												_token:'{{ csrf_token() }}'
											},
											success: function(response){
											// console.log(response['cinema']);
											// console.log(response['data']);
											
											var len = 0;
											let len2 = 0;
											
											if(response['cinema'] != null){
											len2 = response['cinema'].length;
											// console.log(len2);
											}


											if(response['data'] != null){
											len = response['data'].length;
											// console.log(len);
											}

											

											if(len > 0){
											for(var i=0; i<len; i++){

												var id = response['data'][i].id;
												var time = response['data'][i].time;
												
												// console.log(id);
												// console.log(time);
												var option = "<option value='"+time+"'>"+time+"</option>";
												

												$("#time").append(option); 
												
													}
												}
											// console.log(len2);
											// if(len2 > 0){
													// Read data and create <option >
											// for(var i=0; i<len2; i++){

											// console.log(response['cinema']);
											// var cinema = response['cinema'][i].name;
														
											// console.log(cinema);
													
											// var cinema_option = "<option value='"+cinema+"'>"+cinema+"</option>";

											// $("#time").append(option); 
											// $("#cinema").append(cinema_option); 
																		
											//   }
											// }
													
											}
										});	
									});				
								});				
								</script>

								<!-- Date Time -->
								<div class="col-md-8 mt-1" >
									<label for="time" class="form-label details__devices-title">Time:</label>
									<select class="date_picker col-12" id="time" name="time" required>
									  <option value="">Choose...</option>
									</select>
									<div class="form-label details__devices-title">
									  Please select a valid Time.
									</div>
								</div>
								<!-- End Time -->
								<!-- Cinema Availibe -->
								<div class="col-md-12 mt-1" >
									<label for="cinema" class="form-label details__devices-title">Cinema:</label>
									<select class="date_picker col-12" name="cinema" id="cinema" required>
									  <option value="">Choose...</option>
									</select>
									<div class="form-label details__devices-title">
									  Please select a valid cinema.
									</div>
								</div>
								<!-- End Cinema Availibe  -->
								<script>
								$(document).ready(function(){
								$("select[name='time']").change(function(){
									let date=$('#date_1').val();
									let time=$('#time').val();
									let movie_id=$('#movie_id').val();
									var url ="get_cinema/"+date+"/"+time+"/"+movie_id;
										
										$.ajax({
											url: url,
											type: "GET",
											cache: false,
											data:{
												_token:'{{ csrf_token() }}',
												date:date,
												time:time,
												m_id:movie_id
											},
											success: function(response){
											console.log(response['cinema']);
											// console.log(response['data']);
											
											var len = 0;
											let len2 = 0;
											
											if(response['cinema'] != null){
											len2 = response['cinema'].length;
											// console.log(len2);
											}


											if(response['data'] != null){
											len = response['data'].length;
											// console.log(len);
											}
	
											if(len2 > 0){
													// Read data and create <option >
											for(var i=0; i<len2; i++){

											// console.log(response['cinema']);
											var cinema = response['cinema'][i].name;
														
											// console.log(cinema);
													
											var cinema_option = "<option value='"+cinema+"'>"+cinema+"</option>";

											// $("#time").append(option); 
											$("#cinema").append(cinema_option); 
																		
											  }
											}
													
											}
										});	
									});	
									$("select[name='cinema']").change(function(){
									let date=$('#date_1').val();
									let time=$('#time').val();
									let movie_id=$('#movie_id').val();
									let cinema=$('#cinema').val();
									var url ="get_seat/"+date+"/"+time+"/"+movie_id+"/"+cinema;
										
										$.ajax({
											url: url,
											type: "GET",
											cache: false,
											data:{
												_token:'{{ csrf_token() }}',
												date:date,
												time:time,
												m_id:movie_id,
												cinema:cinema
											},
											success: function(response){
											console.log(response['seat']);
											// console.log(response['data']);
											
											var len = 0;
											let len2 = 0;
											
											if(response['seat'] != null){
											len2 = response['seat'].length;
											// console.log(len2);
											}


											if(response['data'] != null){
											len = response['data'].length;
											// console.log(len);
											}
	
											if(len2 > 0){
													// Read data and create <option >
											for(var i=0; i<len2; i++){

											// console.log(response['cinema']);
											// var cinema = response['cinema'][i].name;
											$('#'+response['seat'][i]).addClass( "sold" );			
											// console.log(cinema);
													
											// var cinema_option = "<option value='"+cinema+"'>"+cinema+"</option>";

											// $("#time").append(option); 
											// $("#cinema").append(cinema_option); 
																		
											  }
											
											}
													
											}
										});	
									});					
								});	
							
								</script>


							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->
				<style>	
				.seat_arrangement 
				{   
					/* margin-top: 80px; */
					/* background-color: #242333; */
					/* padding-left: 90px; */
					color: #fff;
					display: flex;
					flex-direction: column;
					align-items: center;
					justify-content: center;
					font-family: "Lato", sans-serif;
					margin: 0;
				}
			
				.movie-container {
				margin: 20px 0;
				}

				.movie-container select {
				background-color: #fff;
				border: 0;
				border-radius: 5px;
				font-size: 16px;
				margin-left: 10px;
				padding: 5px 15px 5px 15px;
				-moz-appearance: none;
				-webkit-appearance: none;
				appearance: none;
				}

				.container_seat{
				perspective: 1000px;
				margin-bottom: 30px;
				}

				.seat {
				background-color: #ffffff;
				height: 26px;
				width: 32px;
				margin: 3px;
				font-size: 50px;
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				}

				.seat.selected {
				background-color: rgb(239, 97, 130);
				}

				.seat.sold {
				background-color: rgb(255, 0, 0);
				}

				.seat:nth-of-type(2) {
				margin-right: 18px;
				}

				.seat:nth-last-of-type(2) {
				margin-left: 18px;
				}

				.seat:not(.sold):hover {
				cursor: pointer;
				transform: scale(1.2);
				}

				.showcase .seat:not(.sold):hover {
				cursor: default;
				transform: scale(1);
				}

				.showcase {
				background: rgba(0, 0, 0, 0.1);
				padding: 5px 10px;
				border-radius: 5px;
				color: #777;
				list-style-type: none;
				display: flex;
				justify-content: space-between;
				}

				.showcase li {
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 10px;
				}
				.showcase li small {
				margin-left: 2px;
				}
				p.text{
					margin: 5px 0;
					color: white;
				}

				p.text span{
					color: rgb(158, 248, 158);
				}
				.row {
				display: flex;
				}
				</style>
				<!-- player -->
				<div class="col-12 col-xl-6" >
					<div class="status col-12" style="display:flex;background-color:#fbfbff31;padding: 8px;text-align: center;" >
						<div class="status_box col-4" style="display:flex;">
							<label  class="form-label details__devices-title">Reserved Seat</label>
							<div style="background-color:red;width: 20px;height: 20px;border-radius: 3px;margin-left: 5px;"></div>
						</div>
						<div class="status_box col-4" style="display:flex;" >
							<label  class="form-label details__devices-title">Availible Seat</label>
							<div style="background-color:white;width: 20px;height: 20px;border-radius: 3px;margin-left: 5px;" ></div>
						</div>
						<div class="status_box col-4" style="display:flex;">
							<label  class="form-label details__devices-title">Selected Seat</label>
							<div style="background-color:green;width: 20px;height: 20px;border-radius: 3px;margin-left: 5px;" ></div>
						</div>
					</div>
					<div class="col-12">
						<img src="img/screen.png" class="col-12" alt="">
					</div>
					<div class="col-12 seat_arrangement">
						<div class="container_seat">
							<div class="screen"></div>
					  
							<div class="row">
							  <div class="seat" id="seat1"></div>
							  <div class="seat" id="seat2"></div>
							  <div class="seat" id="seat3"></div>
							  <div class="seat" id="seat4"></div>
							  <div class="seat" id="seat5"></div>
							  <div class="seat" id="seat6"></div>
							  <div class="seat" id="seat7"></div>
							  <div class="seat" id="seat8"></div>
							</div>
					  
							<div class="row">
							  <div class="seat" id="seat9"></div>
							  <div class="seat" id="seat10"></div>
							  <div class="seat" id="seat11"></div>
							  <div class="seat" id="seat12"></div>
							  <div class="seat " id="seat13"></div>
							  <div class="seat" id="seat14"></div>
							  <div class="seat" id="seat15"></div>
							  <div class="seat" id="seat16"></div>
							</div>
							<div class="row">
							  <div class="seat" id="seat17"></div>
							  <div class="seat" id="seat18"></div>
							  <div class="seat" id="seat19"></div>
							  <div class="seat" id="seat20"></div>
							  <div class="seat" id="seat21"></div>
							  <div class="seat" id="seat22"></div>
							  <div class="seat" id="seat23"></div>
							  <div class="seat" id="seat24"></div>
							</div>
							<div class="row">
							  <div class="seat" id="seat25"></div>
							  <div class="seat" id="seat26"></div>
							  <div class="seat" id="seat27"></div>
							  <div class="seat" id="seat28"></div>
							  <div class="seat" id="seat29"></div>
							  <div class="seat" id="seat30"></div>
							  <div class="seat" id="seat31"></div>
							  <div class="seat" id="seat32"></div>
							</div>
							<div class="row">
							  <div class="seat" id="seat33"></div>
							  <div class="seat" id="seat34"></div>
							  <div class="seat" id="seat35"></div>
							  <div class="seat" id="seat36"></div>
							  <div class="seat" id="seat37"></div>
							  <div class="seat" id="seat38"></div>
							  <div class="seat" id="seat39"></div>
							  <div class="seat" id="seat40"></div>
							</div>
							<div class="row">
							  <div class="seat" id="seat41"></div>
							  <div class="seat" id="seat42"></div>
							  <div class="seat" id="seat43"></div>
							  <div class="seat" id="seat44"></div>
							  <div class="seat" id="seat45"></div>
							  <div class="seat" id="seat46"></div>
							  <div class="seat" id="seat47"></div>
							  <div class="seat" id="seat48"></div>
							</div>
						</div>
					</div>
					<div class="col-12" style="background-color:#fbfbff31 ;">
						<p class="text" style="text-align:center;">
							You have selected <span id="count">0</span> seat for a price of RS.<span
							  id="total"
							  >0</span
							>
						</p>
					</div>

				</div>
				<!-- end player -->
				<script>
					var book_seat = [];    
		
					let btn_on_1=true;let btn_on_2=true;let btn_on_3=true;let btn_on_4=true;let btn_on_5=true;
					let btn_on_6=true;let btn_on_7=true;let btn_on_8=true;let btn_on_9=true;let btn_on_10=true;

					let btn_on_11=true;let btn_on_12=true;let btn_on_13=true;let btn_on_14=true;let btn_on_15=true;
					let btn_on_16=true;let btn_on_17=true;let btn_on_18=true;let btn_on_19=true;let btn_on_20=true;
	
					let btn_on_21=true;let btn_on_22=true;let btn_on_23=true;let btn_on_24=true;let btn_on_25=true;
					let btn_on_26=true;let btn_on_27=true;let btn_on_28=true;let btn_on_29=true;let btn_on_30=true;
					
					let btn_on_31=true;let btn_on_32=true;let btn_on_33=true;let btn_on_34=true;let btn_on_35=true;
					let btn_on_36=true;let btn_on_37=true;let btn_on_38=true;let btn_on_39=true;let btn_on_40=true;

					let btn_on_41=true;let btn_on_42=true;let btn_on_43=true;let btn_on_44=true;let btn_on_45=true;
					let btn_on_46=true;let btn_on_47=true;let btn_on_48=true;
					
					const count = document.getElementById("count");
					const total = document.getElementById("total");
					count.innerText=0;
					total.innerText=0;
					$("#seat1").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
								if(btn_on_1==true){
								$(this).addClass( "selected" );
								count.innerText++;
								btn_on_1=false;
								total.innerText = count.innerText * 700;

								book_seat.push('seat1');			
								console.log(book_seat);	
								}else{	
								$(this).removeClass( "selected" );	
								btn_on_1=true;
								count.innerText--;
								total.innerText = count.innerText * 700;

								book_seat.pop('seat1');			
								console.log(book_seat);
								}
					   }
						
						
					});
					$("#seat2").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_2==true){
						 $(this).addClass( "selected" );
						 count.innerText++;
						 btn_on_2=false;	
						 total.innerText = count.innerText * 700;
						 
						 book_seat.push('seat2');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 btn_on_2=true;
						 total.innerText = count.innerText * 700;
						 book_seat.pop('seat2');
						}
					   }
						
					});
					$("#seat3").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_3==true){
						 $(this).addClass( "selected" );
						  count.innerText++;
						 btn_on_3=false;	
						 total.innerText = count.innerText * 700;
						 
						 book_seat.push('seat3');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_3=true;
						 book_seat.pop('seat3');
						}
					   }
						
					});
					$("#seat4").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_4==true){
						 count.innerText++;
						 $(this).addClass( "selected" );
						 btn_on_4=false;	
						 total.innerText = count.innerText * 700;

						 book_seat.push('seat4');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 btn_on_4=true;
						 total.innerText = count.innerText * 700;
						 book_seat.pop('seat4');
						}
					   }
						
					});
					$("#seat5").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_5==true){
						 $(this).addClass( "selected" );
						 count.innerText++;
						 btn_on_5=false;	
						 total.innerText = count.innerText * 700;

						 book_seat.push('seat5');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 btn_on_5=true;
						 total.innerText = count.innerText * 700;
						 book_seat.pop('seat5');
						}
					   }
						
					});
					    $("#seat6").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					    }else{
						if(btn_on_6==true){
						 count.innerText++;
						  total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_6=false;	

						 book_seat.push('seat6');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 btn_on_6=true;
						 book_seat.pop('seat6');
						}
					    }
						
					});
					$("#seat7").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					    }else{
						if(btn_on_7==true){
					    count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_7=false;	

						book_seat.push('seat7');			
						console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						   total.innerText = count.innerText * 700;
						 btn_on_7=true;
						 book_seat.pop('seat7');
						}
					    }
						
					});
					$("#seat8").click(function(){
					if($(this).hasClass("sold")){
						console.log("already booked");
					}else{
						if(btn_on_8==true){
							count.innerText++;
							 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_8=false;
						 book_seat.push('seat8');			
						 console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						  total.innerText = count.innerText * 700;
						   btn_on_8=true;
						   book_seat.pop('seat8');
						}
						
						}
					});
					$("#seat9").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						
					   }
						if(btn_on_9==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_9=false;	
						 book_seat.push('seat9');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						   total.innerText = count.innerText * 700;
						 btn_on_9=true;
						 book_seat.pop('seat9');
						}
					});
					$("#seat10").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_10==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_10=false;
						 book_seat.push('seat10');			
						 console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_10=true;
						 book_seat.pop('seat10');
						}
					   }
						
					});
					$("#seat11").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_11==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
							
						 $(this).addClass( "selected" );
						 btn_on_11=false;	
						 book_seat.push('seat11');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						   total.innerText = count.innerText * 700;
						 btn_on_11=true;
						 book_seat.pop('seat11');
						}
					   }
						
					});
					$("#seat12").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_12==true){
							count.innerText++;
							 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_12=false;
						 book_seat.push('seat12');			
						 console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						   total.innerText = count.innerText * 700;
						 btn_on_12=true;
						 book_seat.pop('seat12');
						}
					   }
						
					});
					if($("#seat13").hasClass("sold")){
						console.log("already booked");
					}
					else{
						$("#seat13").click(function(){
						if(btn_on_13==true){
							count.innerText++;
							 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_13=false;
						 book_seat.push('seat13');			
						 console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_13=true;
						 book_seat.pop('seat13');
						}
					    });
					}
					$("#seat14").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_14==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_14=false;	
						 book_seat.push('seat14');			
						 console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						  count.innerText--;
						   total.innerText = count.innerText * 700;
						 btn_on_14=true;
						 book_seat.pop('seat14');
						}
					   }
						
					});
					$("#seat15").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_15==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_15=false;	
						book_seat.push('seat15');			
						console.log(book_seat);
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						  total.innerText = count.innerText * 700;
						 btn_on_15=true;
						 book_seat.pop('seat15');
						}
					   }
						
					});
					$("#seat16").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_16==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_16=false;
						 book_seat.push('seat16');			
						 console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_16=true;
						 book_seat.pop('seat16');
						}
					   }
						
					});
					$("#seat17").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_17==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_17=false;
						book_seat.push('seat17');			
						console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_17=true;
						 book_seat.pop('seat17');
						}
					   }
						
					});
					$("#seat18").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_18==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_18=false;	
						book_seat.push('seat18');			
						console.log(book_seat);
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_18=true;
						book_seat.pop('seat18');
						}
					   }
						
					});
			
				$("#seat18").click(function(){
					if($("#seat19").hasClass("sold")){
						console.log("already booked");
					}
					else{
						$("#seat19").click(function(){
						if(btn_on_19==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_19=false;
						book_seat.push('seat19');			
						console.log(book_seat);	
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_19=true;
						 book_seat.pop('seat18');
						}
					    });
				      }
					});
				
					$("#seat20").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_20==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_20=false;
						book_seat.push('seat20');			
						console.log(book_seat);	

						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_20=true;
						 book_seat.pop('seat20');
						}	
					   }
						
					});
					$("#seat21").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_21==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_21=false;
						book_seat.push('seat21');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_21=true;
						book_seat.pop('seat21');
						}
					}
					});
					$("#seat22").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_22==true){
						count.innerText++;
						$(this).addClass( "selected" );
						btn_on_22=false;
						book_seat.push('seat22');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						btn_on_22=true;
						book_seat.pop('seat22');
						}
					}
					});
					$("#seat23").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_23==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_23=false;
						book_seat.push('seat23');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_23=true;
						book_seat.pop('seat23');	
						}
					}
					});
					$("#seat24").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_24==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_24=false;	
						book_seat.push('seat24');
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_24=true;
						book_seat.pop('seat24');
						}
					}
					});
					$("#seat25").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_25==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_25=false;
						book_seat.push('seat25');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_25=true;
						book_seat.pop('seat25');	
						}
					}
					});
					$("#seat26").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_26==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_26=false;
						book_seat.push('seat26');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_26=true;
						book_seat.pop('seat26');
						}
					}
					});
					$("#seat27").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_27==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_27=false;
						book_seat.push('seat27');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_27=true;
						book_seat.pop('seat27');
						}
					}
					});
					$("#seat28").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_28==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_28=false;
						book_seat.push('seat28');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_28=true;
						book_seat.pop('seat28');
						}
					}
					});
					$("#seat29").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_29==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_29=false;
						book_seat.push('seat29');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_29=true;
						book_seat.pop('seat29');	
						}
					}
					});
					$("#seat30").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_30==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_30=false;
						book_seat.push('seat30');	
						}else{	
						 $(this).removeClass( "selected" );
						count.innerText--;
						total.innerText = count.innerText * 700;	
						btn_on_30=true;
						book_seat.pop('seat30');
						}
					}
					});
					$("#seat31").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_31==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_31=false;
						book_seat.push('seat31');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_31=true;
						book_seat.pop('seat31');	
						}
					}
					});
					$("#seat32").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_32==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_32=false;	
						book_seat.push('seat32');
						}else{	
						 $(this).removeClass( "selected" );
						count.innerText--;	
						total.innerText = count.innerText * 700;
						btn_on_32=true;
						book_seat.pop('seat32');
						}
					}
					});
					$("#seat33").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_33==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_33=false;
						book_seat.push('seat33');	
						}else{	
						 $(this).removeClass( "selected" );
						count.innerText--;	
						total.innerText = count.innerText * 700;
						btn_on_33=true;
						book_seat.pop('seat33');	
						}
					}
					});
					$("#seat34").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_34==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_34=false;
						book_seat.push('seat34');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						btn_on_34=true;
						book_seat.pop('seat34');	


						}
					}
					});
					$("#seat35").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_35==true){
						count.innerText++;
						$(this).addClass( "selected" );
						btn_on_35=false;
						book_seat.push('seat35');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_35=true;
						book_seat.pop('seat35');	
						}
					}
					});
					$("#seat36").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_36==true){
						count.innerText++;
						$(this).addClass( "selected" );
						btn_on_36=false;
						book_seat.push('seat36');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						btn_on_36=true;
						book_seat.pop('seat36');	
						}
					}
					});
					$("#seat37").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_37==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_37=false;	
						book_seat.push('seat37');
						}else{	
						 $(this).removeClass( "selected" );	
						btn_on_37=true;
						count.innerText--;
						total.innerText = count.innerText * 700;
						book_seat.pop('seat37');
						}
					}
					});
					$("#seat38").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_38==true){
						count.innerText++;
						$(this).addClass( "selected" );
						btn_on_38=false;	
						total.innerText = count.innerText * 700;
						book_seat.push('seat38');
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_38=true;
						book_seat.push('seat38');
						}
					}
					});
					$("#seat39").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_39==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_39=false;
						book_seat.push('seat39');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_39=true;
						book_seat.push('seat39');
						}
					}
					});
					$("#seat40").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_40==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_40=false;
						book_seat.push('seat40');	
						}else{	
						 $(this).removeClass( "selected" );	
						btn_on_40=true;
						count.innerText--;
						total.innerText = count.innerText * 700;
						book_seat.pop('seat40');	
						}
					}
					});
					$("#seat41").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_41==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_41=false;
						book_seat.push('seat41');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_41=true;
						book_seat.pop('seat41');	
						}
					}
					});
					$("#seat42").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_42==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_42=false;
						book_seat.push('seat42');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_42=true;
						book_seat.pop('seat42');	
						}
					}
					});
					$("#seat43").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_43==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						book_seat.push('seat43');
						$(this).addClass( "selected" );
						btn_on_43=false;	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_43=true;
						book_seat.pop('seat43');
						}
					}
					});
					$("#seat44").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_44==true){
						count.innerText++;
						$(this).addClass( "selected" );
						btn_on_44=false;
						book_seat.push('seat44');	
						}else{	
						$(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_44=true;
						book_seat.pop('seat44');	
						}
					}
					});
					$("#seat45").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_45==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_45=false;	
						book_seat.push('seat45');
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_45=true;
						book_seat.pop('seat45');
						}
					}
					});
					$("#seat46").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_46==true){
						count.innerText++;
						total.innerText = count.innerText * 700;
						$(this).addClass( "selected" );
						btn_on_46=false;
						book_seat.push('seat46');	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_46=true;
						book_seat.pop('seat46');
						}
					}
					});
					$("#seat47").click(function(){
						if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_47==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 book_seat.push('seat47');
						 btn_on_47=false;	
						}else{	
						 $(this).removeClass( "selected" );	
						count.innerText--;
						total.innerText = count.innerText * 700;
						btn_on_47=true;
						book_seat.pop('seat47');
						}
					}
					});
					$("#seat48").click(function(){
					  if($(this).hasClass("sold")){
						console.log("already booked");
					   }else{
						if(btn_on_48==true){
						 count.innerText++;
						 total.innerText = count.innerText * 700;
						 $(this).addClass( "selected" );
						 btn_on_48=false;	
						 book_seat.push('seat48');
						}else{	
						 $(this).removeClass( "selected" );	
						 count.innerText--;
						 total.innerText = count.innerText * 700;
						 btn_on_48=true;
						 book_seat.pop('seat48');

						}
					}
					});
					
				</script>

				<div class="col-12">
					<div class="details__wrap">
						<!-- availables -->
						<input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
						<div class="details__devices">
							<ul class="details__devices-list">
								<li>
								<button type="button" class="section__btn" id="btn-check" >Checkout</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
				
			$("#btn-check").click(function(){
				
				var seats=book_seat;	
				var date=$('#date_1').val();	
				var time=$('#time').val();	
				var cinema=$('#cinema').val();	
				var movie_id=$('#movie_id').val();
				
				if(seats.length==0 ){
					alert('Please Select Seat');
				}
				else{
					$.ajax({
					url: "book/store",
					type: "POST",
					data: {
						_token: $("#csrf").val(),
						type: 1,
						seat: seats,
						date:date,
						time:time,
						cinema:cinema,
						m_id:movie_id
					},
					success: function(dataResult){
						console.log(dataResult);
						var dataResult = JSON.parse(dataResult);
						if(dataResult.statusCode==200){
							location.reload();				
						}
						else if(dataResult.statusCode==201){
							alert("Error occured !");
						}
						// location.reload();
					}
				});				
				
				}	
			});
					
		</script>
		<!-- end details content -->
	
	</section>
	<!-- end home -->	

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