<?php 
include_once('connection.php');

	$data=$_POST;
	$sql = "INSERT INTO employees (CODE,NAME,EMAIL,MOBILE,ADDRESS) 
	VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['EMAIL']."','".$data['MOBILE']."','".$data['ADDRESS']."')";


	   $result = $conn->query($sql);
	
header('Location: 7.1.php');
 ?>