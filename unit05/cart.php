<?php 
session_start();
//session_destroy();
include_once('chuyen_hoa.php');
if (isset($_SESSION['cart'])) {  
$products_cart=$_SESSION['cart'];
}else{
  $products_cart=array();
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<legend><h1 class="text-center">Danh sách sản phẩm đã chọn</h1></legend>
 	
 <div class="container">

 	<a href="indexsp.php"><button class="btn btn-success">Trang chủ</button></a>
 	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>


    <?php 
    $i=0;
    $tong=0;
    foreach ($products_cart as $product) {
    	$i++;
    	$tong+=$product['dongia']*$product['soluong'];
     ?>
     <tr>
     	<td><?= $i ?></td>
     	<td><?= $product['masp'] ?></td>
     	<td><?=  $product['tensp']?></td>
        <td><img width="100px" src="<?=  $product['anh']?>"></td>
     	<td><a href="add2cart.php?masp=<?= $product['masp'] ?>" class="btn btn-success">+</a>
     		<?=  $product['soluong'] ?>
     		<a href="less.php?masp=<?= $product['masp'] ?>" class="btn btn-danger">-</a>
     		</td>
      <td><?= number_format($product['dongia']); ?></td>
     	<td><?= number_format($product['dongia']*$product['soluong']); ?></td>
     	<td><a href="delete.php?masp=<?= $product['masp'] ?>" class="btn btn-danger">Delete</a></td>
     	
     </tr>
     
 <?php } ?>
 		<tr>
     	<td colspan="6">Tổng tiền</td>
     	<td colspan="2"><?=number_format($tong)?></td>
     </tr>
     <tr>
     	<td colspan="6">Tổng tiền bằng chữ</td>
     	<td colspan="2"><?=convert_number_to_words( $tong )?></td>
     </tr>
      

  </tbody>
</table>  
     <div class="text-center">
      <a href="formkhachhang.php" class="btn btn-success">Thanh toán</a> 
      <a href="deleteall.php" class="btn btn-danger">Xóa hết</a> 
     </div>
 </div>
 </body>
 </html>