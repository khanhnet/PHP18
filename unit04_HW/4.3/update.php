<?php 
session_start();
$_SESSION['cart'];
if (isset($_POST['btup'])) {
	foreach ($_POST['sl'] as $key => $val) {
		$_SESSION['cart'][$key]['sl']=$val;

		
	}
	echo "<pre>";
print_r($_POST['sl']);
echo "</pre>";
}

header("Location:viewcart.php");
 ?>