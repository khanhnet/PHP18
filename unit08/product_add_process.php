<?php 
include_once('connection.php');

	$data=$_POST;
	$sql = "INSERT INTO products (CODE,NAME,QUANTITY,PRICE,TYPE,PICTURE) 
	VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['QUANTITY']."','".$data['PRICE']."','".$data['TYPE']."','".$data['PICTURE']."')";


	   $result = $conn->query($sql);
	
header('Location: listsp.php');
 ?>