<?php 
require_once('data.php');
session_start();
//session_destroy();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<legend><h1 class="text-center">Quản lí bán hàng</h1></legend>
 	
 <div class="container">


 	<a href="cart.php"><button class="btn btn-success">Xem giỏ hàng</button></a>
 	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=0;
    foreach ($products as $product) {
    	$i++;
     ?>
     <tr>
     	<td><?= $i ?></td>
     	<td><?= $product['masp'] ?></td>
      <td><?=  $product['tensp']?></td>
     	<td><img width="100px" src="<?=  $product['anh']?>"></td>
     	<td><?=  $product['soluong'] ?></td>
     	<td><?= number_format($product['dongia']); ?></td>
     	<td><a href="add2cart.php?masp=<?= $product['masp'] ?>" class="btn btn-success">Mua sản phẩm</a></td>
     </tr>
 <?php } ?>
  </tbody>
</table>	
 </div>
 </body>
 </html>