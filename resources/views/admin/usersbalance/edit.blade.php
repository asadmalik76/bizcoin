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
<h2 class="content-header-title float-left mb-0">Manage User Balance</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage user Balance
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
   
<form method="POST" id="dform" action="{{ route('usersbalanceupdate',$user->id) }}">
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