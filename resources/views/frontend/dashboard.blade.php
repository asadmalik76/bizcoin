@extends('frontend.layout.master')

@section('content')
<style>
    label{
        color:black !important;
    }
</style>

<div class="artists">
<div class="content">
  <div class="container">

<h1 class="wow fadeInUp">
</div>

</div>


</div>
</div>

<div class="space">

</div>

    
    
    
<div class="container">
        


  <div class="row">

         
  <div class="col-md-12">
    <button type="button" class="btn btn-info" style="float:right" data-toggle="modal" data-target="#myModal">Withdraw Request</button>
      
  </div>
    <div class="col-md-12">
  @if($message=Session::get('success'))
    <div class="alert alert-success" style="background: #1db231;color:#fff;font-weight: bold;margin-top:5px;">
      <p>{{$message}}</p>
    </div>
    @endif

@if($message=Session::get('warning'))
    <div class="alert alert-danger " style="background: #e0455e;color:#fff;font-weight: bold;margin-top:5px">
      <p>{{$message}}</p>
    </div>
    @endif
</div>

<div class="col-md-6">
  
<h2>Welcome Test !</h2>

</div>

<div class="margin"></div>

<div class="col-md-12">
<div id="exTab2">
<ul class="nav nav-tabs"  >
 <li id="a3" class="active">

        <a  href="#3" data-toggle="tab"> Dashboard</a>

      </li>
      
      <li  id="a2">
        <a  href="#2" data-toggle="tab">Transactions</a>
      </li>
      
      <li  id="a7">
        <a  href="#7" data-toggle="tab">Withdraws</a>
      </li>
      
        </ul>








            <div class="tab-content ">
 <div class="tab-pane active" id="3">

<div class="margin"></div>
    <h3>My Dashboard</h3>
<div class="margin"></div>
  <section class='statis text-center'>
            <div class="row">
            



<div class="col-md-3">
                <div class="box b-green">
                    <div class="row">
                    <div class="col-md-4">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="col-md-8">
                        <p class="text-left">Today's Price</p>
                        <h4>{{ $rate->price }} INR</h4>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="box b-green">
                    <div class="row">
                    <div class="col-md-4">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="col-md-8">
                        <p class="text-left">Total Coins</p>
                        <h4>{{ auth::user()->balance }} coins</h4>
                  </div>
                  </div>
                </div>
              </div>



<div class="col-md-3">
                <div class="box b-orange">
                    <div class="row">
                    <div class="col-md-4">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="col-md-8">
                        <p class="text-left">Total Investment</p>
                        <h4>{{ $total_invest }} INR</h4>
                  </div>
                  </div>
                </div>
              </div>

       
              <div class="col-md-3" >
                <div class="box b-yellow">
                    <div class="row">
                    <div class="col-md-4">
                        
                  
                  <i class="fas fa-wallet"></i>
                    </div>
                    <div class="col-md-8">
                        
                  <p class="text-left">Current Profit</p>
                  <h4>{{ $profit }} <small style="color:#fff"> INR</small></h4>
                    </div>
                </div>
                </div>
              </div>
              <div class="col-md-3" style="margin-top:20px">
                <div class="box b-purple">
                    <div class="row">
                        <div class="col-md-4">
                                              <i class="fas fa-dollar-sign"></i>
                        </div>
                  @php
                  $c=0;
                  @endphp
                  
                  <div class="col-md-8">
                      
                  <p class="text-left"><small>Total Withdraw</small></p>
<h4>{{ $total_withdraw }} <small style="color:#fff"> INR</small></h4>                      
                  </div>

                </div>
                </div>
              </div>
              
            </div>
        </section>




 </div>

                <div class="tab-pane" id="2">

<div class="margin"></div>
<h3>
My Transactions
</h3>

<div class="margin"></div>
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="myTable">
              <thead>
                <tr>
                  <th>Sr</th>
                  <th>Transaction ID</th>
                  <th>Amount</th>
                  <th>Coins</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $i=1;
                    ?>
                    @foreach (auth::user()->transactions as $transaction)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $transaction->order_id }}</td>
                          <td>{{ $transaction->amount }}</td>
                          <td>{{ $transaction->coins }}</td>
                          <td>{{ $transaction->created_at }}</td>
                          @if($transaction->status=="0")
                          <td><span class="badge badge-warning" style="background:orange">Pending</span></td>
                          @else
                          <td><span class="badge badge-success" style="background:green">Approved</span></td>
                          @endif
                        </tr>
                    @endforeach
            </tbody>

</table>

</div>
                </div>
                
<!-- end Transaction -->                
                

       <div class="tab-pane" id="7">

<div class="margin"></div>
            <h3>Withdraws</h3>

<div class="margin"></div>
           <div class="table-responsive">
            <table class="table table-striped table-hover" id="newTable">
              <thead>
                <tr>
                  <th>Sr</th>
                  <th>Amount</th>
                  <th>Rate</th>
                  <th>Coins</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  <?php $i=1; ?>
            @foreach (auth::user()->withdraws as $withdraw)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $withdraw->amount }}</td>
                  <td>{{ $withdraw->rate }}</td>
                  <td>{{ $withdraw->coins }}</td>
                  <td>{{ $withdraw->created_at }}</td>
                  @if($withdraw->status=="0")
                  <td><span class="badge badge-warning" style="background:orange">Pending</span></td>
                  @else
                  <td><span class="badge badge-warning" style="background:green">Approved</span></td>
                  @endif
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


<div class="margin"></div>

    </div>

<!-- <div class="popup" pd-popup="popupNew">
    <div class="popup-inner">
        <h2>Update Profile Picture</h2>
<form method="post" enctype="multipart/form-data">
        <img id="blah"  src="" style="height:150px; width:150px; border-radius:50%;border:1px solid black"  alt="your image" />
<div class="form-group">
  <br>

        <input type='file' name="pic" onchange="readURL(this);" class="hidden" id="img"/>
<label class="btn btn-info" for="img">Choose Image</label>
</div>
<input type="submit" name="submit" value="Update Picture" class="s-btn">

</form>
        <a class="popup-close" pd-popup-close="popupNew" href="javascript:void(0)"> </a>


    </div>
</div> -->


@endsection

<script type="text/javascript">
$(function() {
$(".table-wrap").each(function() {
  var nmtTable = $(this);
  var nmtHeadRow = nmtTable.find("thead tr");
  nmtTable.find("tbody tr").each(function() {
    var curRow = $(this);
    for (var i = 0; i < curRow.find("td").length; i++) {
      var rowSelector = "td:eq(" + i + ")";
      var headSelector = "th:eq(" + i + ")";
      curRow.find(rowSelector).attr('data-title', nmtHeadRow.find(headSelector).text());
    }
  });
});
});

function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah')
                    .attr(
                        'src';
                        use e.target.result
                    );

                    };

                    reader.readAsDataURL(input.files[0]);
                    }
                    }


                    </script>
                    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#phone').click(function () {
                            $('#4').addClass('active');
                            $('#1').removeClass('active');
                            $("#a4").addClass('active');
                            $("#a1").removeClass('active');
                        });
                    });
                    </script>

                    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#contacform').submit(function () {
                            if ($('input[name=address1]').val()=="") {
                                              swal("Field Required", "Please Enter Your Address 1", "error");
                                              return false;
                            } elseif ($('input[name=city]').val()=="") {
                                            swal("Field Required", "Password Enter Your City", "error");
                                            return false;
                            } elseif ($('input[name=state]').val()=="") {
                                          swal("Field Required", "Please Enter Your State", "error");
                                          return false;
                            } elseif ($('input[name=zip]').val()=="") {
                                        swal("Field Required", "Please Enter Your Zip Code", "error");
                                        return false;
                            } elseif ($('select[name=country]').val()=="") {
                                      swal("Field Required", "Please Select Your Country", "error");
                                      return false;
                            } elseif ($('input[name=card]').val()=="") {
                                    swal("Field Required", "Please Enter Your Card Number", "error");
                                    return false;
                            } elseif ($('input[name=month]').val()=="") {
                                  swal("Field Required", "Please Enter Your Card Expiry Month", "error");
                                  return false;
                            } elseif ($('input[name=Year]').val()=="") {
                                swal("Field Required", "Please Enter Your Card Expiry Year", "error");
                                return false;
                            } elseif ($('input[name=cvc]').val()=="") {
                                swal("Field Required", "Please Enter Your Card CVC", "error");
                                return false;
                            } else {
                                $('#sub').hide();
                                $('#btnloader').fadeIn();
                                $('#btnloader').css("display", "block");
                                var address1=$('input[name=address1]').val();
                                var address2=$('input[name=address2]').val();
                                var city=$('input[name=city]').val();
                                var state=$('input[name=state]').val();
                                var zip=$('input[name=zip]').val();
                                var country=$('select[name=country]').val();
                                var card=$('input[name=card]').val();
                                var month=$('input[name=month]').val();
                                var year=$('input[name=Year]').val();
                                var cvc=$('input[name=cvc]').val();


                                $.ajax({
                                type:"post",
                                url:"ajax-functions/edit-personal.php",
                                data:{
                                address1:address1,
                                address2:address2,
                                city:city,
                                state:state,
                                zip:zip,
                                country:country,
                                card:card,
                                month:month,
                                myyear:year,
                                cvc:cvc
                                },
                                success:function (data) {
                                    if (data=="success") {
                                        swal("Personal Info Changed Successfully", " You have changed your info", "success");
                                        $('#sub').show();
                                        $('#btnloader').css("display", "none");
                                        setTimeout(function () {
                                                        location.href='profile.php';
                                        }, 3000);
                                    } elseif (data=="failure") {
                                        swal("Opss ", " Something went wrong", "error");
                                        $('#sub').show();
                                        $('#btnloader').css("display", "none");
                                    }
                                }

                                });
                            }
                            return false;
                        });
                    })
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#Einfo').submit(function () {
                            if ($('input[name=fname]').val()=="") {
                                              swal("Field Required", "Please Enter Your First Name", "error");
                                              return false;
                            } elseif ($('input[name=lname]').val()=="") {
                                            swal("Field Required", "Please Enter Your Last Name", "error");
                                            return false;
                            } elseif ($('input[name=uname]').val()=="") {
                                          swal("Field Required", "Please Enter Your Username ", "error");
                                          return false;
                            } elseif ($('input[name=email]').val()=="") {
                                        swal("Field Required", "Please Enter Your Email ", "error");
                                        return false;
                            } elseif ($('input[name=phone]').val()=="") {
                                      swal("Field Required", "Please Enter Your Phone", "error");
                                      return false;
                            } else {
                                    var fname=$('input[name=fname]').val();
                                    var lname=$('input[name=lname]').val();
                                    var phone=$('input[name=phone]').val();
                                    $('#infobtn').hide();
                                    $('#edinfo').fadeIn();
                                    $('#edinfo').css("display", "block");

                                    $.ajax({
                                      type:'post',
                                      url:'ajax-functions/edit-info.php',
                                      data:{
                                      fname:fname,
                                      lname:lname,
                                      phone:phone
                                      },
                                      success:function (data) {
                                        if (data=="success") {
                                            swal('Info Changed', 'You have successfully changed your info', 'success');
                                            $('#infobtn').show();
                                            $('#edinfo').fadeOut();
                                            $('#edinfo').css("display", "none");
                                        }
                                        if (data=="failure") {
                                            swal('Opss', 'Something went wrong', 'error');
                                            $('#infobtn').show();
                                            $('#edinfo').fadeOut();
                                            $('#edinfo').css("display", "none");
                                        }
                                      }
                                    });


                                    return false;
                            }



                            return false;
                        });
                    })
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#pform').submit(function () {
                            if ($('input[name=old]').val()=="") {
                                              swal("Field Required", "Please Enter Your Old Password", "error");
                                              return false;
                            } elseif ($('input[name=password]').val()=="") {
                                            swal("Field Required", "Please Enter Your New Password", "error");
                                            return false;
                            } elseif ($('input[name=password]').val().length<8) {
                                          swal("Field Required", "Password Length Must Be At Least 8 Characters", "error");
                                          return false;
                            } elseif ($('input[name=cpassword]').val()=="") {
                                        swal("Field Required", "Please Confirm Your New Password", "error");
                                        return false;
                            } elseif ($('input[name=password]').val()!=$('input[name=cpassword]').val()) {
                                      swal("Field Required", "New Password Mismatch ", "error");
                                      return false;
                            } elseif ($('input[name=password]').val()==$('input[name=old]').val()) {
                                    swal("Field Required", "New Password can't be same as old one ", "error");
                                    return false;
                            } else {
                                  var oldpass=$('input[name=old]').val();
                                  var newpass=$('input[name=password]').val();
                                  $('#pbtn').hide();
                                  $('#pchange').fadeIn();
                                  $('#pchange').css("display", "block");
                                  $.ajax({
                                    type:'post',
                                    url:'ajax-functions/password.php',
                                    data:{
                                    newpass:newpass,
                                    oldpass:oldpass
                                    },
                                    success:function (data) {
                                        if (data=="success") {
                                            swal('Password Changed', 'You have successfully changed your password', 'success');
                                            $('#pbtn').show();
                                            $('#pchange').fadeOut();
                                            $('#pchange').css("display", "none");
                                        } elseif (data=="failure") {
                                            swal('Incorred Old Password', 'You entered incorrect old password', 'error');
                                            $('#pbtn').show();
                                            $('#pchange').fadeOut();
                                            $('#pchange').css("display", "none");
                                        } elseif (data=="wrong") {
                                            swal('Opss', 'Something went wrong', 'error');
                                            $('#pbtn').show();
                                            $('#pchange').fadeOut();
                                            $('#pchange').css("display", "none");
                                        }
                                    }
                                    });

                                  return false;
                            }

                            return false;
                        });
                    });
                    </script>
