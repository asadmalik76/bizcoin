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
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Balance</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; ?>
    @foreach($users as $user)
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->balance }} INR</td>
        <td>
            @if($user->status==0)
            <div class="custom-control custom-switch custom-control-inline">
                <input type="checkbox" class="custom-control-input" onchange="status({{ $user->id }},{{ $user->status }})" id="customSwitch{{ $user->id }}">
                <label class="custom-control-label" for="customSwitch{{ $user->id }}">
                </label>
            </div>
            @else
            <div class="custom-control custom-switch custom-control-inline">
                <input type="checkbox" checked="checked" class="custom-control-input" onchange="status({{ $user->id }},{{ $user->status }})" id="customSwitch{{ $user->id }}">
                <label class="custom-control-label" for="customSwitch{{ $user->id }}">
                </label>
            </div>
            @endif
        </td>
        <td>
            
<form action="{{ route('users.destroy',$user->id) }}" method="post" accept-charset="utf-8">
    @csrf

    <a href="{{ route('users.edit',$user->id) }}" title="update" class="btn btn-success btn-sm">Edit</a>
@method('delete')
<button type="submit" class="btn btn-danger btn-sm">Delete</button>
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