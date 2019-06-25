<?php 

/**
 * summary
 */
   include_once("models/Customer.php");
class  CustomerController
{

  public function list()
  {
   $customer=new Customer;
   $data= $customer->getAll();
   require_once("views/customers/list.php");
 }
 public function detail()
 {
   $CODEKH=$_GET['CODEKH'];
   $customer=new Customer;
   $details= $customer->find($CODEKH);
   require_once("views/customers/detail.php");
 }
  public function add()
    {
       include("views/customers/add.php");
    }
     public function store()
    {

        $data=$_POST;
        $insert=new Customer;
        $status= $insert->create($data);
        if($status==true){
            setcookie('msg','Thêm mới thành công',time()+1);
        header('Location:?mod=customer&act=list');
            
        }else {
            setcookie('msg','Thêm mới thất bại',time()+1);
        header('Location:?mod=customer&act=add');
        }
    }



         public function edit()
    {
         $CODEKH=$_GET['CODEKH'];
        $customer=new Customer;
        $details= $customer->find($CODEKH);
       include("views/customers/edit.php");
    }
     public function update()
    {

        $data=$_POST;
        $update=new Customer;
        $status= $update->update($data);
        if($status==true){
            setcookie('msg','Sửa thành công!',time()+1);
        header('Location:?mod=customer&act=list');
            
        }else {
            setcookie('msg','Sửa thất bại',time()+1);
        header('Location:?mod=customer&act=edit&CODEKH='.$data['CODE'].'');
        }

    }
     public function delete()
    {
         $CODEKH=$_GET['CODEKH'];
        $customer=new Customer;
        $status= $customer->delete($CODEKH);
        if($status==false){
            setcookie('msg','Xóa thành công',time()+1);
        header('Location:?mod=customer&act=list');
            
        }else {
            setcookie('msg','Xóa thất bại',time()+1);
       header('Location:?mod=customer&act=list');
        }
 
}
}
?>