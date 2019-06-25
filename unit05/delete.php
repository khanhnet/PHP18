<?php 
session_start();
$masp=isset($_GET['masp'])?$_GET['masp']:'';


	unset($_SESSION['cart'][$masp]);

header('Location: cart.php');
 ?>
 