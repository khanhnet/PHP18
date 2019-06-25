<?php 
session_start();
require_once('sp.php');

$masp=$_GET['masp'];
$newproduct=array();
foreach ($product as $val) {
	$newproduct[$val['masp']]=$val;
	
}

if (!isset($_SESSION['cart'])||$_SESSION['cart']==null) {
	$newproduct[$masp]['sl']=1;
	$_SESSION['cart'][$masp]=$newproduct[$masp];
}else {
if (array_key_exists($masp,$_SESSION['cart'])) {
		$_SESSION['cart'][$masp]['sl']+=1;
}else{
	$newproduct[$masp]['sl']=1;
	$_SESSION['cart'][$masp]=$newproduct[$masp];
}
}
echo "<pre>";
print_r($_SESSION['cart']);
header("Location:listsp.php")
 ?>
