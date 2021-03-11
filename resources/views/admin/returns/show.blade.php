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
<h2 class="content-header-title float-left mb-0">Manage Return Rate</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage Return Rate
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
    <a href="{{ route('returnrate.create') }}" class="btn btn-primary mb-1">New return rate</a>
<div class="table-responsive">
<table class="table zero-configuration table-hover table-striped" >
<thead>
    <tr>
        <th>Sr.No</th>
        <th>Return Rate</th>
        <th>Coin Price</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; ?>
    @foreach($returns as $return)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $return->rate }}%</td>
        <td>{{ $return->price }} INR</td>
        <td>{{ $return->date }}</td>
        <td>
            <form method="post" action="{{ route('returnrate.destroy',$return->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('returnrate.edit',$return->id) }}" class="btn btn-info btn-sm">Edit</a>
                <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" value="Delete">
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