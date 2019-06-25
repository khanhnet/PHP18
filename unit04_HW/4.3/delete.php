<?php 
session_start();
$masp=$_GET['masp'];
echo $masp;
unset($_SESSION['cart'][$masp]);
header("Location:viewcart.php")
 ?>