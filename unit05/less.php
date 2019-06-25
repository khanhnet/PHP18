<?php 
session_start();
$masp=isset($_GET['masp'])?$_GET['masp']:'';

if ($_SESSION['cart'][$masp]['soluong']>1) {
	$_SESSION['cart'][$masp]['soluong']--;
}else{

unset($_SESSION['cart'][$masp]);
}
header('Location: cart.php');
 ?>
 