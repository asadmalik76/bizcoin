<?php
include('../db.php');

if (isset($_POST['name'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $query=mysqli_query($connect,"insert into messages(name,email,subject,message) values('$name','$email','$subject','$message')");
  if ($query) {
    echo "success";
  }
  else {
    echo "fail";
  }
}
 ?>
