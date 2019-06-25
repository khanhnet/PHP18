<?php 
include_once('conection_pr.php');
    class Model
    {
      var $conn;
      var $table='';
      var $key='id';
      function __construct(){
        $connection= new Connection();
        $this->conn= $connection->conn;
      }
       public function getAll()
       {
        
        $query = "SELECT * FROM ".$this->table;

        $data=array();
        $result = $this->conn->query($query);
        while($row = $result->fetch_assoc()) { 
           $data[]=$row;
       }
       return $data;
   }

   public function find($code)
   {
    
    $CODE=isset($_GET['CODE'])?$_GET['CODE']:'';
    $query = "SELECT * FROM ".$this->table." WHERE ".$this->key."='".$CODE."'";
    $result = $this->conn->query($query);

    $details = $result->fetch_assoc();
    return $details;
}

public function create($data)
{
  $fields='';
  $values='';
  foreach ($data as $key=> $value) {
    $fields.=$key.",";
    $values .="'".$value."',";

    
  }
  $fields=trim($fields,",");
  $values=trim($values,",");
  
    
    $query = "INSERT INTO ".$this->table." (".$fields.") 
    VALUES (".$values.")";
    echo $query;

    $result = $this->conn->query($query);
    return $result;
}
public function update($data)
{
  $query_up='';
  foreach ($data as $key => $value) {
    $query_up.="".$key."='".$value."',";
    
  }
  $query_up=trim($query_up,",");
  echo $query_up;

   
    $query = "UPDATE ".$this->table." SET ".$query_up." WHERE ".$this->key." = '".$data[$this->key]."'";
    $result = $this->conn->query($query);
   return $result;
}

public function delete()
{
   
 $CODE=isset($_GET['CODE'])?$_GET['CODE']:'';
 $query = "DELETE FROM ".$this->table." WHERE ".$this->key." = '".$CODE."'";
 $result = $this->conn->query($query);

}
}


?>