<?php 
include_once('conection.php');
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

    public function detail($CODE)
   {
    
    $CODE=isset($_GET['CODE'])?$_GET['CODE']:'';
    $query = "SELECT * FROM ".$this->table." WHERE ".$this->key."='".$CODE."'";
    $result = $this->conn->query($query);

    
    
}

   public function find($CODE)
   {
    
    $CODE=isset($_GET['CODE'])?$_GET['CODE']:'';
    $query = "SELECT * FROM ".$this->table." WHERE ".$this->key."='".$CODE."'";
    $result = $this->conn->query($query);
    $detail = $result->fetch_assoc();
    return $detail;
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
    $result = $this->conn->query($query);
    return $result;
    
}
public function update($data,$CODE)
{
  $query_up='';
  foreach ($data as $key => $value) {
    $query_up.="".$key."='".$value."',";
    
  }
  $query_up=trim($query_up,",");

   
    $query = "UPDATE ".$this->table." SET ".$query_up." WHERE ".$this->key." = '".$CODE."'";
    $result = $this->conn->query($query);
   return $result;
}

public function delete()
{
   
 $CODE=isset($_GET['CODE'])?$_GET['CODE']:'';
 $query = "DELETE FROM ".$this->table." WHERE ".$this->key." = '".$CODE."'";
 $result = $this->conn->query($query);

}

public function findDay($DATE)
{
   
 
 $query = "SELECT * FROM ".$this->table." WHERE DATE ='".$DATE."'";
    $data=array();
        $result = $this->conn->query($query);
        while($row = $result->fetch_assoc()) { 
           $data[]=$row;
       }
       return $data;

}
}


?>