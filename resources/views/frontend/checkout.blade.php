@extends('frontend.layout.master')
@section('content')
<div class="margin"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        </div>
        <div class="col-md-6">
            <p class="text-justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, error magni ullam eos officiis asperiores architecto voluptates quae corporis necessitatibus modi ipsa laboriosam alias, ad ratione incidunt. Eius, facere tempora!</p>        
                <label for="">Please select payment method</label>
                <form method="post" action="{{ route('createtransaction') }}">
                    <input type="hidden" value="{{ $coins }}" name="coins">
                    <input type="hidden" value="{{ $amount }}" name="amount">
                <select name="payment_method" required class="form-control">
                    <option value="Lorem">Lorem</option>
                    <option value="Ipsum">Ipsum</option>s
                    <option value="Test">Test</option>
                </select>
                <h3>Pay {{ $amount }} INR to buy {{ $coins }} Coins</h3>
                <div class="form-group">
                <label for="">Enter Transaction ID</label>
                <input type="text" required class="form-control" name="tid">
                </div>
                <div class="form-group">
                    <label for="">Enter Remarks</label>
                    <input type="text" required class="form-control" name="remarks">
                </div>
                <input type="submit" class="pu-btn" value="Checkout">
            </>
        </div>
    </div>
</div>

<div class="margin"></div>
@endsection