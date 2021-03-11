@extends('frontend.layout.master')
@section('content')
<div class="margin"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php echo $content->content ?>
        </div>
    </div>
</div>
@endsection