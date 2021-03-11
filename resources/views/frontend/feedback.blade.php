@extends('frontend.layout.master')
@section('content')
<div class="margin">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Please give your Feedback</h1> 
            @if($message=Session::get('success'))
            <div class="alert alert-success" style="background: #1db231;color:#fff;font-weight: bold">
              <p>{{$message}}</p>
            </div>
            @endif
        
        </div>
        <div class="col-md-6">
            <form action="{{ route('store.feedback') }}" method="post">
                @csrf
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <textarea class="form-control" name="remarks"></textarea>
                <input type="submit" class="btn btn-primary" value="Feedback" style="margin-top:8px">
            </form>
            
        </div>
    </div>
</div>
<div class="margin"></div>
@endsection