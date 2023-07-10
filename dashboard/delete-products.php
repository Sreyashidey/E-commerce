<?php
require_once('auth.php');
require_once('db-connect.php');
$prod_id=$_GET['id'];
$del="delete from products where prod_id='$prod_id'";
mysqli_query($con,$del);
header('location:view-products.php');
?>