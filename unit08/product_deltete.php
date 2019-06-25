<?php 
	include_once('connection.php');

	$ma = $_GET['CODE'];

	$query = "DELETE FROM products WHERE CODE = '".$ma."'";


    $status = $conn->query($query);
  

  	header('Location: listsp.php');

 ?>