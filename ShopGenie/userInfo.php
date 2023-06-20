<?php
  
  $con = mysqli_connect('localhost','root');

  if($con){
      echo "connection success";
  }
  else
  {
     echo "no connection" ;
  }
   
  mysqli_select_db($con, 'user_info');
  $user = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $address = $_POST['address']; 
 
  $query = " insert into login_details(user,email,mobile,password,address) values('$user','$email', '$mobile', '$password', '$address')";

   mysqli_query($con,$query);
?>