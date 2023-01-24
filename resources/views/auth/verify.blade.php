@extends('layouts.app')
@section('content')
<div class="sign section--bg" data-bg="http://127.0.0.1:8000/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
                            <form method="POST" action="{{ route('verification.resend') }}" class="sign__form">
                            @csrf
                           
                            <a href="{{ url('/') }}" class="">
								<img src="http://127.0.0.1:8000/img/logo3.png" width="150px" alt="">
							</a>

                            <h2 class="card-header sign__text">
                            {{ __('Verify Your Email Address') }}
                            </h2>

                            @if (session('resent'))
							<p class="sign__text">{{ __('A fresh verification link has been sent to your email address.') }}</p>	
                            @endif
                    
                           <p class="sign_text" style="color:rgba(255,255,255,0.5) !important">{{ __('Before proceeding, please check your email for a verification link.') }}</p> 
                           <p class="sign_text" style="color:rgba(255,255,255,0.5) !important">{{ __('If you did not receive the email') }},</p> 
               
                            <button class="sign__btn" type="submit">{{ __('click here to request another') }}</button>
                            </form>

						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
