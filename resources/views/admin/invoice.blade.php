<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iFlexStream</title>
    <link rel="stylesheet" href="{{ asset('/css/invoice_style.css') }}" media="all" />
  </head>
  <body>

    <div style="width: 70%; margin: 0 auto;">
    <header class="clearfix">

      <h1>iFlexStream<span style="color:red;font-size:35px;">.</span></h1>
      {{-- <div id="company" class="clearfix">
      </div> --}}
      <div id="project">
        <br><br>
        <div style="color: #5D6975; font-size: 15px; margin-bottom: 5px;"><label style="font-size: 16px; font-weight: bold;">{{ $sub->service->name }}</label> {{ $sub->package->pkg_name }}</div>
        <hr>
        <div style="color: #5D6975; font-size: 15px; margin-bottom: 5px;"><label style="font-size: 16px; font-weight: bold;">Status : </label>{{ $sub->status }}</div>
        <div style="color: #5D6975; font-size: 15px; margin-bottom: 5px;"><label style="font-size: 16px; font-weight: bold;">Expiration Date : </label>{{ $sub->expire_at }}</div>        
        <div style="color: #5D6975; font-size: 15px; margin-bottom: 5px;"><label style="font-size: 16px; font-weight: bold;">Email : </label>{{ $sub->email }}</div>
        <div style="color: #5D6975; font-size: 15px; margin-bottom: 2px;"><label style="font-size: 16px; font-weight: bold;">Password : </label>{{ $sub->password }}</div>
        
        <br>
        {{-- <div style="font-size: 15px;">The phone credit will be put on the phone immediately</div> --}}
  
      </div>
    </header>
    <header class="clearfix">
      <h4 style="text-align: center">Payment Details</h4>
      <div id="company" class="clearfix" style="float: right;">
        <div style="font-size: 16px; margin-bottom: 2px;">{{ ceil($sub->package->pkg_price*$sub->transaction->exchange_rate) }} {{ $sub->transaction->currency }}</div>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">{{ $fee }}  {{ $sub->transaction->currency }}</div>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">{{ $sub->transaction->payment_method }}</div>

        <hr>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">{{ $sub->transaction->local_amount }} {{ $sub->transaction->currency }}</div>
        
      </div>
      <div id="project">
        <div style="font-size: 16px; margin-bottom: 2px;">{{ $sub->package->pkg_name }}</div>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">Service Fee</div>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">Payment method</div>
        
        <hr>
        <div style="color: #5D6975; font-size: 14px; margin-bottom: 2px;">Total Amount</div>
      </div>
    </header>
    <main>  
    
      <div id="notices">
          
        <h1><span style="font-size: 15px; font-weight: bold;">NOTICE: </span><span style="font-size: 14px;">Errors and omissions are expected</span></h1>
      </div>
    </main>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      window.print();
    });
  </script>
</html>