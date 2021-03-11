@extends('frontend.layout.master')

@section('content')

<style>
    .error{
        color:red;
    }
    label{
        color:#fff;
    }
</style>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="card" style="background-image:url({{url('img/auth-img.png')}});background-size:100% 100%;border:none">

<div class="card-header">
{{-- <img src="" class="wow fadeInUpBig register-img" alt="" style="width:200px"><br> --}}

<h3 class="register-text" style="color:#fff">Register and Get Started</h3>
</div>
<div class="card-body">
<form method="POST" id="dform" action="{{ route('register') }}">
@csrf

<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    
    </div>
</div>
<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username" placeholder="Enter Username" value="{{ old('name') }}"  autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>




<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full name') }}</label>

<div class="col-md-6">
<input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="full_name"placeholder="Enter Fullname" value="{{ old('fname') }}"  autocomplete="fname" autofocus>

@error('fname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter E-mail"  autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>






<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password"  autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>




<div class="form-group row">
<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password">
</div>
</div>



<div class="form-group row">
<label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

<div class="col-md-6">
<select id="countryId" class="countries form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}"  autocomplete="country">
  <option value="">Select Country</option>
</select>
@error('country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>



<div class="form-group row">
<label for="city" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

<div class="col-md-6">
<select id="stateId" class="states form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  autocomplete="state">
  <option value="">Select State</option>
</select>

@error('state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

<div class="col-md-6">
<select id="cityId" class="cities form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city">
  <option value="">Select City</option>
</select>

@error('city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>


<div class="form-group row">
<label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

<div class="col-md-6">
<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone" autocomplete="phone">

@error('phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>












<div class="form-group row">
<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

<div class="col-md-6">
<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" placeholder="Enter Address">

@error('address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>


<input type="hidden" name="recaptcha" id="recaptcha">

<!-- 
<div class="form-group row">
<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Refer ID') }}</label>

<div class="col-md-6">
<input id="refer_id" type="text" class="form-control @error('refer_id') is-invalid @enderror" name="refer_id" value="{{ old('refer_id') }}" required autocomplete="refer_id">

@error('refer_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div> -->


<div class="form-group">
    <label class="col-md-4"></label>
    <label class="col-md-6">  <input type="checkbox" class="@error('terms') you must be agree with Terms of services and privacy policy @enderror" name="terms" value="1"> I am agree with <a href="/termsandservices">Terms of Services</a> and <a href="/termsandservices">Privacy policy<a></a></label>
    
@error('terms')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group row">
<label for="address" class="col-md-5 col-form-label text-md-right"></label>

<div class="col-md-6">
<<button type="submit" style="margin-right:100% !important; margin-top:-20px;background:orange;" class="btn login-btn pu-btn">
    {{ __('Register') }}
</button>

</div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        
<p class="text-center" style="color:#fff">Already have an account? <a href="/login">Login</a></p>
    </div>
</div>

</form>
</div>
</div>
</div>
</div><br>
</div>
@endsection


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>



<script type="text/javascript">

$.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       && /[a-z]/.test(value) // has a lowercase letter
       && /\d/.test(value) // has a digit
});


    var $form = $("#dform"),
  $successMsg = $(".alert");
$.validator.addMethod("letters", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$form.validate({

  rules: {
    name: {
      required: true
        },
    fname: {
        required: true
  },
  lname: {
        required: true
  },
  login_name: {
        required: true
  },
  
  phone: {
    required: true,
      minlength: 10,
      maxlength: 10,
      letter: false,
      number: true,
  },
    id: {
    required: true
  },
    terms: {
    required: true
  },
  
  password: {
      required: true,
      minlength: 6,
      pwcheck: true
  },
    
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    name: "Veuillez precisez un prenom",
    email: "Veuillez indiquer une adresse e-mail valide"
        ,
    fname: "Veuillez d'abord préciserr"
        ,
    id:"Merci de renseigner un CIN"
    ,
    lname: "Veuillez préciser le nom"
        ,
    login_name: "Veuillez spécifier le nom de connexion"
        ,

    phone: "Merci de rentrer un numéro de téléphone valide"
        ,
    password:"Le mot de passe doit contenir au moins une lettre minuscule et un chiffre (longueur minimale 6 caractères)",
    
  },
  submitHandler: function() {
$('#dform').submit(true);
  }
});
</script>

