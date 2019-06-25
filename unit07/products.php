<?php 

	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	include_once('connection.php');

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM products";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

	/*while($row = $result->fetch_assoc()) { 
		  
	echo "<pre>";
		print_r($row);
	echo "</pre>";
		  	   
        	 
    }*/

 ?>
