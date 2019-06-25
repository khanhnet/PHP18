<?php 

	
	// Thong so ket noi CSDL
	include_once('connection.php');

	$CODE = $_GET['CODE'];

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM products WHERE CODE='".$CODE."'";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

	$product= $result->fetch_assoc();
	echo json_encode($product);
	
 ?>