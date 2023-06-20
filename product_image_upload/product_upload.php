<?php
   
   include_once 'connection.php';

print_r($_POST);
$name =$_POST['name'];
$price =$_POST['price'];
$details =$_POST['details'];

date_default_timezone_set("Asia/kolkata");
$unique_file_name = date("y_m_d_h_i_s").'.jpg';
echo "file_name = $unique_file_name";
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$unique_file_name);
// header('location:image_upload.html');

$cmd = "insert into product(name,prize,details,img_name) values('$name',$price,'$details','$unique_file_name')";
echo "SQL querry = $cmd";
$sql_status = mysqli_query($conn,$cmd);
if($sql_status){
    echo "product uploaded successfully";
    header('location:product_upload.html');
}
else
{
    echo " error in SQL Querry";
}
?>