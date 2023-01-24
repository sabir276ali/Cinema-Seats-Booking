@extends('../layouts.app')
@section('content')
<!-- <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css"> -->
<div class="sign section--bg" data-bg="http://127.0.0.1:8000/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
                         <form method="POST" class="sign__form" action="{{ route('password.email') }}">
                           @csrf
                            <a href="{{ url('/') }}" class="sign__logo">
								<img src="http://127.0.0.1:8000/img/logo3.png" alt="">
							</a>

							<div class="sign__group">
								<input  class="sign__input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email to Send link" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							</div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="sign__text">{{ $message }}</strong>
                                    </span>
                            @enderror
							
							<button class="sign__btn" type="submit"> {{ __('Send Password Reset Link') }}</button>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection
