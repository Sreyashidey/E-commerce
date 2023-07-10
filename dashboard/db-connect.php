<?php
$con=mysqli_connect('localhost:3307','root','') or die("Database connection failure");
mysqli_select_db($con,'ecommerce') or die('database selection failure');
?>