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
<h2 class="content-header-title float-left mb-0">Manage Ratings</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage Ratings
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
<div class="table-responsive">
<table class="table zero-configuration table-hover table-striped" >
<thead>
    <tr>
        <th>Sr.No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Rating</th>
        <th>Remarks</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; ?>
    @foreach($ratings as $rating)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $rating->user->username }}</td> 
        <td>{{ $rating->user->email }}</td>
        <td>{{ $rating->rating }}</td> 
        <td>{{ $rating->remarks }}</td>
        <td>
            @if($rating->status==0)
            <div class="custom-control custom-switch custom-control-inline">
                <input type="checkbox" class="custom-control-input" onchange="rating({{ $rating->id }},{{ $rating->status }})" id="customSwitch{{ $rating->id }}">
                <label class="custom-control-label" for="customSwitch{{ $rating->id }}">
                </label>
            </div>
            @else
            <div class="custom-control custom-switch custom-control-inline">
                <input type="checkbox" checked="checked" class="custom-control-input" onchange="rating({{ $rating->id }},{{ $rating->status }})" id="customSwitch{{ $rating->id }}">
                <label class="custom-control-label" for="customSwitch{{ $rating->id }}">
                </label>
            </div>
            @endif
        </td>
        <td>
            <form method="post" action="{{ route('testimonials.destroy',$rating->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
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