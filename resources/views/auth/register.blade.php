@extends('layouts.app')

@section('content')
<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
                          <form method="POST" class="sign__form" action="{{ route('register') }}">
                          @csrf
							<a href="{{ url('/') }}" class="sign__logo">
								<img src="img/logo3.png" alt="">
							</a>

							<div class="sign__group">
								<input id="name" class="sign__input" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Name">
                                @error('name')
                                        <!-- <span class="invalid-feedback" role="alert"> -->
                                            <p class="sign__text">{{ $message }}</p>
                                        <!-- </span> -->
                                @enderror
                            </div>
                           

							<div class="sign__group">
								<input id="email" class="sign__input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">
                                @error('email')
                                        <!-- <span class="invalid-feedback" role="alert"> -->
                                            <p class="sign__text">{{ $message }}</p>
                                        <!-- </span> -->
                                @enderror
                            </div>
                            

							<div class="sign__group">
								<input id="password" class="sign__input" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password"  placeholder="Password">
                                @error('password')
                                        <!-- <span class="invalid-feedback" role="alert"> -->
                                            <p class="sign__text">{{ $message }}</p>
                                        <!-- </span> -->
                                @enderror
                            </div>
                           

                            <div class="sign__group">
								<input class="sign__input" id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked" required>
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="role" name="role" value="1" type="checkbox">
								<label for="role">Register as <a > Service Provider</a></label>
							</div>
							
							<button class="sign__btn" type="submit">Sign up</button>

							<span class="sign__text">Already have an account? <a href="{{ route('login') }}">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
