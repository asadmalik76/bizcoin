@extends('frontend.layout.master')
@section('content')

<style>
    .auth-btn{
        margin-top:0px;
        padding: 5px;
    padding-top: 5px;
    padding-left: 10px;
    padding-right: 10px;
    }
</style>
<div class="container">
    <div class="margin"></div>
    <div class="row justify-content-center" >
        <div class="col-md-4"></div>
        
        <div class="col-md-4"  >
            <div class="card"  style="background-image:url({{url('img/auth-img.png')}});background-size:100% 100%;border:none">
                 
                <div class="card-header">
<img src="{{ asset('img/paisay111.png') }}" width="200" class="wow fadeInUpBig" alt=""><br><br><br>

            </div>





<!--    @if(Session::get('verification'))-->

<!--<div class="container">-->
<!--<div class="row justify-content-center verification">-->
<!--        <div class="col-md-12">-->
<!--               @if (session('resent'))-->
<!--                        <div class="alert alert-success" role="alert">-->
<!--                            {{ __('A fresh verification link has been sent to your email address.') }}-->
<!--                          </div>-->
<!--                    @endif-->
                    
                    
<!--            <div class="alert alert-danger" style="border:0px">-->
<!--                <div class="card-header" style="color:red">{{ __('Verify Your Email Address') }}</div>-->

                 
<!--                    {{ __('Before proceeding, please check your email for a verification link.') }}-->
<!--                    {{ __('If you did not receive the email') }},-->
<!--                    <form class="" method="POST" action="{{ route('verification.resend') }}">-->
<!--                        @csrf-->
<!--                        <button type="submit" class="btn btn-link p-0 m-0 " style="margin:0px;padding:0px">{{ __('click here to request another') }}</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--@endif-->



                <!--<div class="card-body">-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter E-mail" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                       
                        <div class="form-group">
                                <button type="submit" class="btn login-btn auth-btn">  
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                  <br> <br> <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#fff">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br>

                    </div>
                    
                    <div class="form-group">
                        <p class="" style="color:#fff">Don't have an account? <a href="/signup"> Register</a></p>
                    </div>
                    </form>
                </div>
            <!--</div>-->
            <br>
        </div>
    </div>
</div>

    <div class="margin"></div>
@endsection
