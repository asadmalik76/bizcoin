@extends('admin.layout.master')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-9 col-12 mb-2">
<div class="row breadcrumbs-top">
<div class="col-12">
<h2 class="content-header-title float-left mb-0">Manage Users</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage users
</li>
</ol>
</div>
</div>
</div>
</div>

</div>
<div class="content-body">
<div class="row">
<div class="col-12">
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
<!-- Zero configuration table -->
<section id="basic-datatable">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
</div>
<div class="card-content">
<div class="card-body card-dashboard">
   
<form method="POST" id="dform" action="{{ route('users.update',$user->id) }}">
    @csrf
    @method('PUT')
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
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username"  value={{ $user->username }}  autocomplete="name" autofocus>
    
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
    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="full_name"   autocomplete="fname" autofocus value={{ $user->full_name }}>
    
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
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    </div>
    
    
    
        
    <div class="form-group row">
    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
    
    <div class="col-md-6">
    <select id="countryId" class="countries form-control @error('country') is-invalid @enderror" name="country" autocomplete="country">
        
      <option value="{{ $user->country }}">{{ $user->country }}</option>
      <option value="{{ $user->country }}">{{ $user->country }}</option>
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
    <select id="stateId" class="states form-control @error('state') is-invalid @enderror" name="state"  autocomplete="state">
      <option value="{{ $user->state }}">{{ $user->state }}</option>
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
    <select id="cityId" class="cities form-control @error('city') is-invalid @enderror" name="city" autocomplete="city">
      <option value="{{ $user->city }}">{{ $user->city }}</option>
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
    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"  autocomplete="phone" value="{{ $user->phone }}">
    
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
    <input id="address" type="text" value="{{ $user->address }}" class="form-control @error('address') is-invalid @enderror" name="address"   autocomplete="address" >
    
    @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    </div>
    
    <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Balance') }}</label>
        
        <div class="col-md-6">
        <input id="" type="text" value="{{ $user->balance }}" class="form-control @error('address') is-invalid @enderror" name="balance"  autocomplete="address" >
        
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        </div>

    <div class="form-group row">
    <label for="address" class="col-md-5 col-form-label text-md-right"></label>
    
    <div class="col-md-6">
    <input type="submit" class="btn btn-primary" value="Update">
    
    </div>
    </div>
    
    </form>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Scroll - horizontal and vertical table -->

</div>
</div>
</div>
<!-- END: Content-->


@endsection