@extends('frontend.layout.master')  
@section('content')
<div class="hero">
  <div class="foverlay">
    <div class="container">
      <h1>Get In Touch</h1>
      <p>Get in touch with us to discuss your queries</p>
    </div>
  </div>
</div>


<div class="container" id="contact">
<div class="row">
  <div class="col-md-6 wow fadeInLeft">
<br>    <h2>Get In Touch</h2>
<div class="margin">

</div>
<p>
  Having questions in mind ? Get in touch now, send an inquiry. Problems are solved with discussion.
  Call, Email, Reach or Send us messages now.
</p>
<p>
  <i class="fa fa-paper-plane"></i>
<span> &nbsp;
Sargodha, Pakistan
</span>

</p>
<br>
<p>
  <i class="fa fa-phone orange"></i>
<span> &nbsp;
  Call us on:
  +92 309 0215441


</span>

</p>
<br>
<p>
  <i class="fa fa-envelope orange"></i>

<span> &nbsp;
  Email us on:
  <a href="mailto:info@bizcoin.online" target="_blank">
info@bizcoin.online</a>
  </a>

</span>

</p>

  </div>
  <div class="col-md-6 wow fadeInRight">
    
    @if($message=Session::get('success'))
    <div class="alert alert-success" style="background: #1db231;color:#fff;font-weight: bold;margin-top:5px;">
      <p>{{$message}}</p>
    </div>
    @endif
<div class="contact">
<h2 style="text-align:left">Drop A Message</h2>
<form method="post" name="frm1" action="{{ route('storemessage') }}">
  <br>
  @csrf
<div class="form-group">
<input type="text" required name="name" class="form-control" placeholder="Name">
</div>
<div class="form-group">
<input type="email" required name="email" class="form-control"  placeholder="Email">
</div>
<div class="form-group">
<input type="text" required name="subject" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
  <textarea name="message" required class="form-control" placeholder="Write Message"></textarea>
</div>
<div class="form-group">
  <input type="submit"value="Send A Message" class="pu-btn" id="quote">
  <img src="img/45.gif" height="50" width="50" style="margin-left:40px;display  :none" id="miniloader" alt="Softileo">
</div>
</form>
</div>
  </div>
</div>
</div>






<div class="margin">

</div>
@endsection