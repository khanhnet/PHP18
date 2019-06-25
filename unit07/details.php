<?php 

	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	include_once('connection.php');

	$CODE = $_GET['CODE'];

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM products WHERE CODE='".$CODE."'";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

	$product= $result->fetch_assoc();
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
    <table class="table table-striped">
  <thead>
  	<tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <td><?= $product['CODE'] ?></td>
        <td><?= $product['NAME']?></td>
        <td><img width="50px" src="images/products/<?= $product['PICTURE']?>"></td>
        <td><?= $product['QUANTITY'] ?></td>
        <td><?= number_format($product['PRICE']); ?></td> 
     </tr>
  </tbody>
</table>    
 </div>
 </body>
 </html>