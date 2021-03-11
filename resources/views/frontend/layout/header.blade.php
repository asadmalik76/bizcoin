<!DOCTYPE html>
<html >
<head>
  <title>Welcome to Bizcoin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('css/style.css')}}">
  <link rel="stylesheet" href="{{asset ('css/all.css')}}">
  <link rel="stylesheet" href="{{asset ('css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('css/animate.css')}}">
  <link rel="icon" href="{{asset ('img/favicon.png')}}">
  <link rel="stylesheet" href="{{asset ('css/themify-icons.css'
  )}}">
  <link rel="stylesheet" href="{{asset ('css/ie7.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}">

</head>
<body>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="margin-top: -40px;" href="./">
<img src="{{ asset('img/logo.png') }}" width="120" alt="">
  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse"   id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home
        </a></li>
        <li> <a href="/#buy-coins" >Buy coins</a> </li>
        <li> <a href="/#return-history" >Return History</a> </li>
        <li> <a href="/#testimonials" >Testimonials</a> </li>
        <li> <a href="/about" >About Us</a> </li>
        <li> <a href="/contact" >Contact Us</a> </li>
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
            {{ Auth::user()->username }}<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background: black">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/profile">Profile</a></li>
            <li>
              
  <a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>
          </ul>
        </li>
           <li><a><div class="badge badge-primary" style="background: green;padding:5px">{{ Auth::user()->balance}}<small>&nbsp;INR</small></div></a></li>
@else
        <li> <a href="/login"> <button class="head-btn">Login</button> </a> </li>
<li> <a href="/signup"> <button class="head-btn">Signup</button> </a> </li>
@endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>

  </nav>




  <body>
