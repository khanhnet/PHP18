<?php 
session_start();
require_once('sp.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <?php 
    $total=0;
    if (isset($_SESSION['cart'])&&$_SESSION['cart']!=null) {
    	foreach ($_SESSION['cart'] as $list) {
    		$total=$list['sl'];
    	}
    }

     ?>
 </head>
 <body>
 	<legend><h1 class="text-center">Quản lí bán hàng</h1></legend>
 	
 <div class="container">

 	<a href="viewcart.php"><button class="btn btn-success">Xem giỏ hàng</button></a>
 	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=0;
    foreach ($product as $listproduct) {
    	$i++;
     ?>
     <tr>
     	<td><?php echo $i; ?></td>
     	<td><?php echo $listproduct['masp'] ;?></td>
     	<td><?php echo  $listproduct['tensp'];?></td>
     	<td><?php echo  $listproduct['soluong'] ;?></td>
     	<td><?php echo number_format($listproduct['dongia']); ?></td>
     	<td><a href="buy.php?masp=<?php echo $listproduct['masp'] ;?>" class="btn btn-success">Buy</a></td>
     </tr>
 <?php } ?>
  </tbody>
</table>	
 </div>
 </body>
 </html>