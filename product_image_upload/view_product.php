<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
     
     img{
         width:300px
         height:3500px;
     }

      .pdt_cart{
         
      }

    </style>
</head>
<body>
    
</body>
</html>
<?php

include_once 'connection.php';
$sql_obj = mysqli_query($conn,'select * from product');

$total_rows = mysqli_num_rows($sql_obj);

echo "<div class='row'>";

for($i=0;$i<$total_rows;$i++)
{
    $row = mysqli_fetch_assoc($sql_obj);
    $name = $row['name'];
    $price = $row['prize'];
    $details = $row['details'];
    $img_name = $row['img_name'];

    echo"
       <div class='pdt_card col-sm-6 col-md-4 width:300px height:250px ml-6 text-center col-3' >
       <div class='bg-warning w-75 pb-4 text-white'>
       <h3>$name</h3>
       <img src='$img_name'>
       </div>
       </div>

       ";
}
echo "</div>";
?>