<?php 

class Employee
{
	public function getAll()
	{
     include("conection.php");
     $query = "SELECT * FROM employees";
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
  $CODENV=isset($_GET['CODENV'])?$_GET['CODENV']:'';
  $query = "SELECT * FROM employees WHERE CODE='".$CODENV."'";
  $result = $conn->query($query);

  $details = $result->fetch_assoc();
  return $details;


}

}


?>