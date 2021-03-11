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
  @if($message=Session::get('success'))
    <div class="alert alert-success" style="background: #1db231;color:#fff;font-weight: bold">
      <p>{{$message}}</p>
    </div>
    @endif

@if($message=Session::get('warning'))
    <div class="alert alert-danger" style="background: #e0455e;color:#fff;font-weight: bold">
      <p>{{$message}}</p>
    </div>
    @endif
    
    

@if($message=Session::get('error'))
    <div class="alert alert-danger" style="background: #e0455e;color:#fff;font-weight: bold">
      <p>{{$message}}</p>
    </div>
    @endif
    @foreach ($errors->all() as $error)
    <p class="text-danger">{{ $error }}</p>
 @endforeach
</div>

<div class="col-md-6">
  
<h2>Welcome {{ $user->username }} !</h2>

</div>

<div class="margin"></div>

<div class="col-md-12">
<div id="exTab2">
<ul class="nav nav-tabs"  >

            <li id="a1" class="active">
        <a  href="#1" data-toggle="tab" > General Info </a>
            </li>
            <li id="a4"><a href="#4" data-toggle="tab">Edit Info</a>
            </li>
            <li id="a5"><a href="#5" data-toggle="tab">Edit Password</a>
            </li>
        </ul>









            <div class="tab-content ">

              <div class="tab-pane active" id="1">

<div class="margin"></div>

<div class="margin"></div>
<h3>Profile</h3>

<div class="margin"></div>
<div class="margin"></div>

<div class="row">

<div class="col-md-6">

<div class="table-responsive">

<table class="table table-striped">
    <!-- <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <th>Package Type</th>
            <th>Expiry Date</th>
        </tr>
        

    </thead> -->
    <tbody>
      <tr>
        <td><strong>Full name</strong></td>
        <td>{{ $user->full_name }}</td>
    </tr>
        <tr>
            <td><strong>Username</strong></td>
            <td>{{ $user->username }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $user->email }}</td>
        </tr>
       

        <tr>
            <td><strong>Personal Balance</strong></td>
            <td>{{ $user->balance }} <small>INR</small></td> 
            
             
             
             
  </td>
        </tr>
    </tbody>
</table>


</div>

</div>

<div class="col-md-6">

<div class="table-responsive">

<table class="table table-striped">
  <tbody>
    <tr>
      <td><strong>Phone</strong></td>
      <td>{{ $user->phone }}</td>
  </tr>
    <tr>
      <td><strong>City</strong></td>
      <td>{{ $user->city }}</td>
    </tr>


    <tr>
      <td><strong>Country</strong></td>
      <td>{{ $user->country }}</td>
    </tr>


    <tr>
      <td><strong>Address</strong></td>
      <td>{{ $user->address }}</td>
    </tr>





    </tbody>
</table>
    </div>
</div>


</div>
        </div>
    
       
        <div class="tab-pane" id="4">

<div class="margin"></div>
          <h3>Edit Profile</h3>

<div class="margin"></div>

<div class="row">
          <div class="col-md-6">

  <form action="{{ route('updateprofile') }}" method="post" id="Einfo">
@csrf
        
          <div class="clearfix">

          </div>
<input type="hidden" name="id" value="">
<div class="col-md-12">

  <div class="form-group">
    <label >Full Name</label>
      <input type="text" name="full_name" class="form-control input" value="{{ $user->full_name }}" required>
  </div>

</div>
          <div class="col-md-12">

            <div class="form-group">
              <label >Username</label>
                <input type="text" name="username" class="form-control input" value="{{ $user->username }}" required>
            </div>

          </div>

          <div class="col-md-12">

            <div class="form-group">
              <label >Email</label>
            <input type="email" name="email" readonly class="form-control input" value="{{ $user->email }}" required>
            </div>

          </div>

          <div class="col-md-12">

            <div class="form-group">
              <label >Phone</label>
            <input type="phone" name="phone" class="form-control input" value="{{ $user->phone }}" required>
            </div>

          </div>
                    <div class="col-md-12">
            <div class="form-group">
              <label >Address</label>
            <input type="phone" name="address" class="form-control input" value="{{ $user->address }}" required>
            </div>

          </div>

<br>

</div>

<div class="col-md-6">
  
  <div class="col-md-12">

            <div class="form-group">
                <label>Country</label>
<select id="countryId" class="countries form-control" name="country" required>
  <option value="{{ $user->country }}" selected>{{ $user->country }}</option>
  <option value="{{ $user->country }}" selected>{{ $user->country }}</option>
</select>
            </div>
          </div>

<div class="col-md-12">

            <div class="form-group">
                <label>State</label>
<select id="stateId" class="states form-control" name="state" required>
  <option value="{{ $user->state }}" selecte`d>{{ $user->state }}</option>
  </select>
            </div>
</div>


  <div class="col-md-12">

            <div class="form-group">
               <label>City</label>
              <select id="cityId" class="cities form-control" name="city" required>
                
  <option value="{{ $user->city }}" selected>{{ $user->city }}</option>
</select>
            </div>
          </div>

         <div class="col-md-12">

          <input type="submit" name="update" value="Update Info" id="infobtn" class="btn btn-success">
       </div> 

</div>

</div>
</form>
</div>



        <div class="tab-pane" id="5">

<div class="margin"></div>
          <h3>Edit Password</h3>

<div class="margin"></div>

<div class="row">
<div class="col-md-6">
<form method="post" id="pform" action="{{ route('change.password') }}">
    @csrf
  <div class="col-md-12">
  <div class="form-group">
    <label >Old Password</label>
  <input type="password" name="current_password" class="form-control input" placeholder="Enter Old Password" value="">
  </div>

  </div>


  <div class="col-md-12">

  <div class="form-group">
    <label >New Password</label>
  <input type="password" name="new_password" class="form-control input" placeholder="Enter New Password" value="">
  </div>

  </div>

  <div class="col-md-12">
  <div class="form-group">
    <label >Confirm Password</label>
    <input type="password" name="new_confirm_password" class="form-control input" placeholder="Confirm Password" value="">
  </div>

<input type="submit" name="changepass" id="pbtn" value="Change Password" class="btn btn-success">
  </div>
</div>
  <div class="clearfix">

  </div>

<!-- <img src="img/gear.gif" height="80" width="80" id="pchange" class="center" alt="">
 -->
</form>


</div>

                </div>

            </div>
  </div>
</div>
<div class="margin"></div>
</div>
<div class="margin"></div>

<div class="col-md-6">
  

</div>

        </div>


<div class="margin"></div>

    </div>










  


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
                   .attr('src', e.target.result);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }


</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#phone').click(function(){
      $('#4').addClass('active');
      $('#1').removeClass('active');
      $("#a4").addClass('active');
      $("#a1").removeClass('active');

    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#contacform').submit(function(){
      if($('input[name=address1]').val()==""){
        swal("Field Required","Please Enter Your Address 1","error");
        return false;
      }
      else if($('input[name=city]').val()==""){
        swal("Field Required","Password Enter Your City","error");
        return false;
      }
      else if($('input[name=state]').val()=="") {
        swal("Field Required","Please Enter Your State","error");
        return false;
      }
      else if($('input[name=zip]').val()=="") {
        swal("Field Required","Please Enter Your Zip Code","error");
        return false;
      }
      else if($('select[name=country]').val()=="") {
        swal("Field Required","Please Select Your Country","error");
        return false;
      }

      else if($('input[name=card]').val()=="") {
        swal("Field Required","Please Enter Your Card Number","error");
        return false;
      }
      else if($('input[name=month]').val()=="") {
        swal("Field Required","Please Enter Your Card Expiry Month","error");
        return false;
      }
      else if($('input[name=Year]').val()=="") {
        swal("Field Required","Please Enter Your Card Expiry Year","error");
        return false;
      }
      else if($('input[name=cvc]').val()=="") {
        swal("Field Required","Please Enter Your Card CVC","error");
        return false;
      }
      else {
        $('#sub').hide();
        $('#btnloader').fadeIn();
        $('#btnloader').css("display","block");
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
          success:function(data){
              if (data=="success"){
              swal("Personal Info Changed Successfully"," You have changed your info","success");
              $('#sub').show();
              $('#btnloader').css("display","none");
              setTimeout(function(){
              location.href='profile.php';
            },3000);
            }
            else if(data=="failure"){
              swal("Opss ", " Something went wrong", "error");
              $('#sub').show();
              $('#btnloader').css("display","none");
            }
          }

        });

      }
      return false;
    });
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#Einfo').submit(function(){
      if($('input[name=fname]').val()=="") {
        swal("Field Required","Please Enter Your First Name","error");
        return false;
      }
      else if($('input[name=lname]').val()=="") {
        swal("Field Required","Please Enter Your Last Name","error");
        return false;
      }
      else if($('input[name=uname]').val()=="") {
        swal("Field Required","Please Enter Your Username ","error");
        return false;
      }
        else if($('input[name=email]').val()=="") {
        swal("Field Required","Please Enter Your Email ","error");
        return false;
      }
      else if($('input[name=phone]').val()=="") {
        swal("Field Required","Please Enter Your Phone","error");
        return false;
      }
      else {
        var fname=$('input[name=fname]').val();
        var lname=$('input[name=lname]').val();
        var phone=$('input[name=phone]').val();
        $('#infobtn').hide();
        $('#edinfo').fadeIn();
        $('#edinfo').css("display","block");

        $.ajax({
          type:'post',
          url:'ajax-functions/edit-info.php',
          data:{
            fname:fname,
            lname:lname,
            phone:phone
          },
          success:function(data){
            if (data=="success") {
              swal('Info Changed', 'You have successfully changed your info','success');
              $('#infobtn').show();
              $('#edinfo').fadeOut();
              $('#edinfo').css("display","none");
            }
            if (data=="failure") {
              swal('Opss', 'Something went wrong','error');
              $('#infobtn').show();
              $('#edinfo').fadeOut();
              $('#edinfo').css("display","none");
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
  $(document).ready(function(){
    $('#pform').submit(function(){
      if($('input[name=old]').val()=="") {
        swal("Field Required","Please Enter Your Old Password","error");
        return false;
      }
      else if($('input[name=password]').val()=="") {
        swal("Field Required","Please Enter Your New Password","error");
        return false;
      }
      else if($('input[name=password]').val().length<8) {
        swal("Field Required","Password Length Must Be At Least 8 Characters","error");
        return false;
      }
      else if($('input[name=cpassword]').val()=="") {
        swal("Field Required","Please Confirm Your New Password","error");
        return false;
      }
      else if($('input[name=password]').val()!=$('input[name=cpassword]').val() ) {
        swal("Field Required","New Password Mismatch ","error");
        return false;
      }
      else if($('input[name=password]').val()==$('input[name=old]').val() ) {
        swal("Field Required","New Password can't be same as old one ","error");
        return false;
      }
      else {
        var oldpass=$('input[name=old]').val();
        var newpass=$('input[name=password]').val();
        $('#pbtn').hide();
        $('#pchange').fadeIn();
        $('#pchange').css("display","block");
        $.ajax({
          type:'post',
          url:'ajax-functions/password.php',
          data:{
            newpass:newpass,
            oldpass:oldpass
          },
          success:function(data){
            if (data=="success") {
              swal('Password Changed', 'You have successfully changed your password','success');
              $('#pbtn').show();
              $('#pchange').fadeOut();
              $('#pchange').css("display","none");
            }
            else if (data=="failure") {
              swal('Incorred Old Password', 'You entered incorrect old password','error');
              $('#pbtn').show();
              $('#pchange').fadeOut();
              $('#pchange').css("display","none");
            }
            else if (data=="wrong") {
              swal('Opss', 'Something went wrong','error');
              $('#pbtn').show();
              $('#pchange').fadeOut();
              $('#pchange').css("display","none");
            }
          }
        });

        return false;
      }

  return false;
});
});
</script>

