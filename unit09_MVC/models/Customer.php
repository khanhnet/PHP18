<?php 

class Customer
{
	public function getAll()
	{
     include("conection.php");
     $query = "SELECT * FROM customers";
     $data=array();
     $result = $conn->query($query);

     while($row = $result->fetch_assoc()) { 
       $data[]=$row;
   }
   return $data;
}

public function find()
{
  include("conection.php");
  $CODEKH=isset($_GET['CODEKH'])?$_GET['CODEKH']:'';
  $query = "SELECT * FROM customers WHERE CODE='".$CODEKH."'";
  $result = $conn->query($query);

  $details = $result->fetch_assoc();
  return $details;


}

public function create($data)
{
       include("conection.php");
   
    $query = "INSERT INTO customers (CODE,NAME,EMAIL,MOBILE,ADDRESS) 
  VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['EMAIL']."','".$data['MOBILE']."','".$data['ADDRESS']."')";
    $result = $conn->query($query);

   
    return $result;


}
public function update($data)
{
       include("conection.php");
   
    $query = "UPDATE customers SET CODE='".$data['CODE']."',NAME='".$data['NAME']."',EMAIL='".$data['EMAIL']."',MOBILE='".$data['MOBILE']."',ADDRESS='".$data['ADDRESS']."' WHERE CODE = '".$data['CODE']."' ";
    $result = $conn->query($query);

   
    return $result;


}
public function delete()
{
         include("conection.php");
   $CODEKH=isset($_GET['CODEKH'])?$_GET['CODEKH']:'';
    $query = "DELETE FROM customers WHERE CODE = '".$CODEKH."'";
    $result = $conn->query($query);

   



}
}


?>