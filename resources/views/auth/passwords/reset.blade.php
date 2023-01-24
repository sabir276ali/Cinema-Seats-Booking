@extends('layouts.app')
@section('content')
<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="POST" action="{{ route('password.update') }}" class="sign__form">
                         @csrf

                            <a href="{{ url('/') }}" class="sign__logo">
								<img src="http://127.0.0.1:8000/img/logo3.png" alt="">
							</a>

                            <input type="hidden" name="token" value="{{ $token }}">

							<div class="sign__group">
								<input  class="sign__input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
							</div>
                        
                            @error('email')
                                    <!-- <span class="invalid-feedback" role="alert"> -->
                                        <p class="sign__text">{{ $message }}</p>
                                    <!-- </span> -->
                            @enderror

							<div class="sign__group">
								<input  class="sign__input" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
							</div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <div class="sign__group">
								<input  id="password-confirm"  class="sign__input" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>

							<button class="sign__btn" type="submit">{{ __('Reset Password') }}</button>
                
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
