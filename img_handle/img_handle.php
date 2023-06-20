<?php
print_r( $_FILES['pdtimg']);
move_uploaded_file($_FILES['pdtimg']['tmp_name'],'myimg.jpg');
?>