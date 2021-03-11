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
<h2 class="content-header-title float-left mb-0">Manage Transactions</h2>
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active">Manage Transactions
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
        <th>Email</th>
        <th>Username</th>
        <th>Phone</th>
        <th>Amount</th>
        <th>Coins</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; ?>
    @foreach($transactions as $transaction)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $transaction->user->email }}</td> 
        <td>{{ $transaction->user->username }}</td>
        <td>{{ $transaction->user->phone }}</td>
        <td>{{ $transaction->amount }} INR</td>
        <td>{{ $transaction->coins }}</td>
        <td>
@if($transaction->status==0)
<div class="badge badge-glow">Pending</div>
@endif
@if($transaction->status==1)
<div class="badge badge-success">Approved</div>
@endif
        </td>
        <td>
            @if($transaction->status==0)
        <a href="approvetransaction/{{ $transaction->id }}" class="btn btn-primary btn-sm">Approve</a>
        @endif
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