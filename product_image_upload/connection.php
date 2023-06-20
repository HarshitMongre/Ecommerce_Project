<?php
  
  $conn = new mysqli('localhost','root','','acme_user');
  if($conn -> connect_error){
    echo "connection error";
    die;
}

?>