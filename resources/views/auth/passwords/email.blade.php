@extends('frontend.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="margin"></div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <h1 class="text-center">Reset your Password</h1>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                   
                </div>
               
            </div>

               
        </form>

        
    </div>
</div>
<div class="margin"></div>
@endsection
