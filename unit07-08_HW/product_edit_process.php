<?php 
	include_once('connection.php');

	if (isset($_GET['CODENV'])) {
        
	$data = $_POST;

	$query = "UPDATE employees SET CODE='".$data['CODE']."',NAME='".$data['NAME']."',EMAIL='".$data['EMAIL']."',MOBILE='".$data['MOBILE']."',ADDRESS='".$data['ADDRESS']."' WHERE CODE = '".$data['CODE']."' ";
	 $status = $conn->query($query);
	 header('Location: 7.1.php');

    }
    if (isset($_GET['CODEKH'])) {
        $data = $_POST;

   $query = "UPDATE customers SET CODE='".$data['CODE']."',NAME='".$data['NAME']."',EMAIL='".$data['EMAIL']."',MOBILE='".$data['MOBILE']."',ADDRESS='".$data['ADDRESS']."' WHERE CODE = '".$data['CODE']."' ";
    $status = $conn->query($query);
	 header('Location: 7.2.php');
     
    }



   
 ?>