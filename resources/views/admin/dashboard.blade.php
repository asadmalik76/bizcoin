@extends('admin.layout.master')
@section('content')
<!-- BEGIN: Content-->

<div class="app-content content">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<!-- Dashboard ///Analytics Start -->
<section id="dashboard-analytics">
<div class="row">
@if($message=Session::get('message'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif


    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
        <div class="avatar bg-rgba-warning p-50 m-0">
        <div class="avatar-content">
        <i class="feather icon-package text-warning font-medium-5"></i>
        </div>
        </div>
        <h2 class="text-bold-700 mt-1 mb-25"></h2>
        <p class="mb-0">Total Users</p>
        <p><b>{{ $users }}</b></p>
        </div>
        <div class="card-content">
        {{-- <div id="orders-received-chart"></div> --}}
        </div>
        </div>
        </div>
    

    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
        <div class="avatar bg-rgba-warning p-50 m-0">
        <div class="avatar-content">
        <i class="feather icon-package text-warning font-medium-5"></i>
        </div>
        </div>
        <h2 class="text-bold-700 mt-1 mb-25"></h2>
        <p class="mb-0">Total Transactions</p>
        <p><b>{{ $total_transactions }} INR</b></p>
        </div>
        <div class="card-content">
        {{-- <div id="orders-received-chart"></div> --}}
        </div>
        </div>
        </div>


<div class="col-lg-3 col-md-6 col-12">
    <div class="card">
    <div class="card-header d-flex flex-column align-items-start pb-0">
    <div class="avatar bg-rgba-success p-50 m-0">
    <div class="avatar-content">
    <i class="feather icon-package text-warning font-medium-5"></i>
    </div>
    </div>
    <h2 class="text-bold-700 mt-1 mb-25"></h2>
    <p class="mb-0">Total Withdraws</p>
    <p><b>{{ $total_withdraw }} INR</b></p>
    </div>
    <div class="card-content">
    {{-- <div id="received-chart"></div> --}}
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
        <div class="avatar bg-rgba-warning p-50 m-0">
        <div class="avatar-content">
        <i class="feather icon-package text-success font-medium-5"></i>
        </div>
        </div>
        <h2 class="text-bold-700 mt-1 mb-25"></h2>
        <p class="mb-0">Total Coins</p>
        <p><b>{{ $total_coins }}</b></p>
        </div>
        <div class="card-content">
        {{-- <div id="received-chart"></div> --}}
        </div>
        </div>
        </div>
</div>
</section>
<!-- Dashboard Analytics end -->

</div>
</div>
</div>
<!-- END: Content-->


@endsection
