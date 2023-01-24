@extends('layouts.app')

@section('content')
<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="POST" action="{{ route('login') }}" class="sign__form">
                         @csrf
                            <a href="{{ url('/') }}" class="sign__logo">
								<img src="img/logo3.png" alt="">
							</a>

							<div class="sign__group">
								<input  class="sign__input" id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
							</div>
                            @error('email')
                                    <!-- <span class="invalid-feedback" role="alert"> -->
                                        <p class="sign__text">{{ $message }}</p>
                                    <!-- </span> -->
                            @enderror

							<div class="sign__group">
								<input  class="sign__input" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password"  autocomplete="current-password">
							</div>
                            @error('password')
                                    <!-- <span class="invalid-feedback" role="alert"> -->
                                        <p class="sign__text">{{ $message }}</p>
                                    <!-- </span> -->
                            @enderror

							<div class="sign__group sign__group--checkbox">
								<input id="remember" class="form-check-input" type="checkbox"  {{ old('remember') ? 'checked' : '' }}>
								<label for="remember"> {{ __('Remember Me') }}</label>
							</div>
							
							<button class="sign__btn" type="submit"> {{ __('Login') }}</button>

							<span class="sign__text">Don't have an account? <a href="{{ route('register') }}">Sign up!</a></span>
                            @if (Route::has('password.request'))
							<span class="sign__text">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                            </a> 
                            </span>  
                            @endif
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
