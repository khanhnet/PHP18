<?php 

include_once("models/Product.php");
class ProductController 
{
    var $model;
    function __construct(){
        $this->model= new Product;
    }
    public function list()
    {
        $data= $this->model->getAll();
        require_once("views/products/list.php");
    }
    public function detail()
    {

   $CODE=$_GET['CODE']; 	
        $details= $this->model->find($CODE);
        require_once("views/products/detail.php");
    }

     public function add()
    {
       include("views/products/add.php");
    }
    
     public function store()
    {

        $data=$_POST;
        unset($data['submit']);
        $status= $this->model->create($data);
        if($status==true){
            setcookie('msg','Thanh cong',time()+5);
        header('Location:?mod=product&act=list');
            
        }else {
            setcookie('msg','That bai',time()+5);
        header('Location:?mod=product&act=add');
        }
    }



         public function edit()
    {
         $CODE=$_GET['CODE'];
        
        $details= $this->model->find($CODE);
       include("views/products/edit.php");
    }
     public function update()
    {

        $data=$_POST;
        unset($data['submit']);
        $status= $this->model->update($data);
        if($status==true){
            setcookie('msg','Thanh cong',time()+5);
        header('Location:?mod=product&act=list');
            
        }else {
            setcookie('msg','That bai',time()+5);
        header('Location:?mod=product&act=edit&CODESP='.$data['CODE'].'');
        }

    }
     public function delete()
    {
         $CODESP=$_GET['CODE'];
        
        $status= $this->model->delete($CODE);
        if($status==true){
            setcookie('msg','Thanh cong',time()+5);
        header('Location:?mod=product&act=list');
            
        }else {
            setcookie('msg','That bai',time()+5);
       header('Location:?mod=product&act=list');
        }
    }
}
 ?>