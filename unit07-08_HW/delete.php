<?php 
	include_once('connection.php');
	if (isset($_GET['CODENV'])) {
		$CODE = $_GET['CODENV'];

	$query = "DELETE FROM employees WHERE CODE = '".$CODE."'";

	 $status = $conn->query($query);
	 header('Location: 7.1.php');
	}
	if (isset($_GET['CODEKH'])) {
		$CODE = $_GET['CODEKH'];

	$query = "DELETE FROM customers WHERE CODE = '".$CODE."'";
	 $status = $conn->query($query);
	 header('Location: 7.2.php');
	}

 ?>