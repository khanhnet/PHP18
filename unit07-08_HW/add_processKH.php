<?php 
include_once('connection.php');

	$data=$_POST;
	$sql = "INSERT INTO customers (CODE,NAME,EMAIL,MOBILE,ADDRESS) 
	VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['EMAIL']."','".$data['MOBILE']."','".$data['ADDRESS']."')";


	   $result = $conn->query($sql);
	
header('Location: 7.2.php');
 ?>