<?php 

/**
 * summary
 */
class  EmployeeController
{

  public function list()
  {
   include_once("models/Employee.php");
   $employee=new Employee;
   $data= $employee->getAll();
   require_once("views/employees/list.php");
 }
 public function detail()
 {
   include_once("models/Employee.php");
   $CODENV=$_GET['CODENV'];
   $employee=new Employee;
   $details= $employee->find($CODENV);
   require_once("views/employees/detail.php");
 }
 
}
?>