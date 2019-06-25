<?php 

include_once('connection.php');

$CODE=$_GET['CODE'];

$query = "SELECT * FROM products WHERE CODE = '".$CODE."' " ;

    // Thuc thi cau lenh truy van co so du lieu
    $result = $conn->query($query);

    $edit = $result->fetch_assoc();
    echo json_encode($edit);
 ?>