

 <?php 
include('data.php');
session_start();
//session_destroy();
$masp=isset($_GET['masp'])?$_GET['masp']:'';

if (isset($_SESSION['cart'][$masp])) {
  if ($_SESSION['cart'][$masp]['soluong']<$products[$masp]['soluong']) {
    
$_SESSION['cart'][$masp]['soluong']++;
  }else{
    $products[$masp]['soluong'];
   
  }

}else{
$product=$products[$masp];
$product['soluong']=1;
$_SESSION['cart'][$masp]=$product;
} 
header('Location: cart.php');

 ?>

 