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
<h2 class="content-header-title float-left mb-0">Manage Privacy Policy</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage Privacy Policy
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
    @if($msg=Session::get('success'))
    <div class="alert alert-success">{{ $msg }}
    </div>
    @endif
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
    
    <form method="post" action="{{ route('updateprivacypage') }}" enctype="multipart/form-data" novalidate>
        @csrf
<div class="row">
<div class="col-md-12">
<div class="form-group">
    <label for="">Privacy Policy</label>
    <textarea name="content" id="texteditor" class="form-control">{{ $content->content }}</textarea>
    <div class="help-block"></div>
    <input type="submit" class="btn btn-primary mt-1" value="Update">
</div>
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