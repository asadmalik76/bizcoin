
  <footer>
    <div class="foverlay">

  <div class="container">
  <div class="row">
    <div class="col-md-3">
        <h2>Bizcoin</h2>
        <div class="margin">

        </div>
        <!-- <img src="img/logo-w.png" style="height:80px;margin-top:-25px;" alt="Softileo"> -->
  <p>
  </p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>
    <div class="col-md-3">
<h2>
Important Links
</h2>
<div class="margin">

</div>
<ul>
  <li> <a href="/">Home</a> </li>
  <li> <a href="/about">About Us</a> </li>
  <li> <a href="/contact">Contact Us</a> </li>
  <li> <a href="/feedback">Feedback</a> </li>
  <li> <a href="/#buy-coins">Buy coins</a> </li>

</ul>


    </div>
    <div class="col-md-3">

      <h2>
      Useful Links
      </h2>
      <div class="margin">

      </div>
      <ul>
        <li> <a href="{{ route('termsandservices') }}">Terms of services</a> </li>
        <li> <a href="{{ route('privacypolicy') }}">Privacy Policy</a> </li>
        <li> <a href="/login">Login</a> </li>
        <li> <a href="/signup">Signup</a> </li>

      </ul>


    </div>
    <div class="col-md-3">
      <h2>
      Reach Us
      </h2>
      <div class="margin">

      </div>
      <ul>
        <li><i class="fa fa-phone"></i>  +92 000 0000000</li>
        <li> <i class="fa fa-envelope"> </i> info@bizcoin.online </li>
        <ul class="sicons">
          <li> <a href="#"> <i class="fab fa-facebook"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
        </ul>
      </ul>
    </div>
    <div class="clearfix">

    </div>
  </div>
  <div class="margin">

  </div>
  <div class="row">
  </div>
  </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Withdraw</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('withdrawrequest') }}">
          @csrf
          <div class="form-group">
            <label for="">No of coins</label>
            <input type="text" class="form-control" placeholder="Enter no of coins" name="coins">
          </div>
          <input type="submit" class="btn btn-info">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>


    @if(Auth::check())






<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buy your ticket</h4>
      </div>
      <div class="modal-body">
        <form action="/buyticket" method="post">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username" value="{{Auth::user()->name}}">
            </div>

            <div class="col-md-12">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
            </div>


            <div class="col-md-12">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
            </div>
<input type="hidden" value="{{Auth::user()->id}}" name="user_id">
<input type="hidden" value="{{ request()->id }}" name="draw_id">
            <div class="col-md-12">
              <label for="">Refer ID</label>
              <input type="text" class="form-control" name="refer_id">
            </div>
          </div>
      </div>
      <div class="modal-footer">
       
        <button type="submit" class="pu-btn btn-sm" style="padding:3px 10px 3px 10px;margin-top: 0px; ">Next</button>


        </form>
      </div>
    </div>

  </div>
</div>






@else


<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buy your ticket</h4>
      </div>
      <div class="modal-body">
        <form action="" method="get">
          <div class="row">
            <div class="col-md-12">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username">
            </div>

            <div class="col-md-12">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email">
            </div>


            <div class="col-md-12">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone">
            </div>

            <div class="col-md-12">
              <label for="">Refer ID</label>
              <input type="text" class="form-control" name="refer_id">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

        <button type="submit" class="btn btn-primary">Next</button>


        </form>
      </div>
    </div>

  </div>
</div>





@endif
  </footer>


  </body>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{asset('/js/jquery-ui.js')}}"></script>
  <script src="{{asset('/js/wow.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/all.js')}}"></script>
  <script src="{{asset('/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('/js/countries.js')}}"></script>

<script src="{{ url('https://kit.fontawesome.com/e28d464463.js')}}" crossorigin="anonymous"></script>


<script src="{{url('//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
});
</script>

<script>
  $(document).ready( function () {
    $('#newTable').DataTable();
});
</script>

  <script type="text/javascript">
  new WOW().init();

  </script>
  </div>
  </body>
  </html>

  <script type="text/javascript">
$(document).ready( function (){
  $('#coins').on('keyup',function(){
var coins=$('#coins').val();
var rate=$('#price').val();
var total=coins*rate;
$('#amount_input').val(total);
total=total+" INR";
$('#total_price').html(total);
});
$('#amount').on('keyup',function(){
var amount=$('#amount').val();
var rate=$('#price').val();
var coins=amount/rate;
coins=Math.floor(coins);
$('#total_coins').html(coins+" coins");
$('#coins_input').val(coins);
});
});
  </script>

  <script type="text/javascript">
  $(document).ready(function(){

    $('.counter').each(function () {
       var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
       $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
       }, {
          duration: 3000,
          step: function (func) {
             $(this).text(parseFloat(func).toFixed(size));
          }
       });
    });

  });

  </script>



  <script type="text/javascript">


  $(document).ready(function() {

    $(window).scroll(function() {

        var height = $('.main').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 80) {
          $('.solid').fadeIn();
          $('#nav').fadeOut();
        } else {
          $('#nav').fadeIn();
          $('.solid').fadeOut();
        }

    });
  });
  $('.scrollTo').click(function(){
    $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
  });
  </script>
<script>
  $(document).ready(function() {
    $('table.display').DataTable();
});
</script>


<script>
function myFunction() {
  var copyText = document.getElementById("code");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  var notdone = document.getElementById("notdone");
  notdone.innerHTML="<i class='fa fa-check'></i>";
}


function myFunction1() {
  var copyText = document.getElementById("code1");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  var notdone = document.getElementById("notdone1");
  notdone.innerHTML="<i class='fa fa-check'></i>";
}
</script>

<script>
  $(document).ready(function(){
    $('#buycoins').click(function(){
      var amount=$('#amount_input').val();
      var coins=$('#coins').val();
      if(amount==""){
        $('#help-block').css('display','block');
       $('#help-block').css('color','red');
       $('#help-block').html('Please enter some value');
       return false;
      }
      else{
        
        $('#help-block').css('display','none');
      $.ajax({
        url:'/coinsrequest',
        type:'get',
        data:{amount:amount,coins:coins},
        success:function(data){
          
          swal("Success", "We have recieved your buy request, our team get in touch with you soon!", "success");
        }
      });
    }
    });
  });
  </script>

<script>
  $(document).ready(function(){
    $('#buypayment').click(function(){
      var amount=$('#amount').val();
      var coins=$('#coins_input').val();
      if(amount==""){
        $('#help-block1').css('display','block');
       $('#help-block1').css('color','red');
       $('#help-block1').html('Please enter some value');
       return false;
      }
      else{
        $('#help-block1').css('display','none');
      $.ajax({
        url:'/coinsrequest',
        type:'get',
        data:{amount:amount,coins:coins},
        success:function(data){
          swal("Success", "We have recieved your buy request, our team get in touch with you soon!", "success");
        }
      });
      }
    });
  });
  </script>