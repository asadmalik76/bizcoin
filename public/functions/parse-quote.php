<?php
include('../db.php');
// $connect=mysqli_connect('cpanel-box5489.bluehost.com','galaxian_mujahid','Wearegreat123@','galaxian_contact');
if(isset($_POST['fname'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $subject=$_POST['sub'];
  $message=$_POST['message'];
  $company=$_POST['com'];
  $option=$_POST['country'];
  $web=$_POST['web'];
  $budget=$_POST['bug'];
  $date=date('d M Y');
$query=  mysqli_query($connect, "insert into quote(name,city,email,phone,subject,budget,company,url,optionsel,message,date)
  values('$fname','$lname','$email','$number','$subject','$budget','$company','$web','$option','$message','$date')");
if($query){
  echo "success";
}
}
 ?>
