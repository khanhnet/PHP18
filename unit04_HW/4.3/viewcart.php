<?php 
session_start();
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
  <legend><h1 class="text-center">Giỏ hàng</h1></legend>
 <div class="container">
 	<table class="table table-striped">
  <thead>
    <tr>
 
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <form action="update.php" method="POST">
      <?php 
     if (isset($_SESSION['cart'])&&$_SESSION['cart']!=null) {
     ?>
      <?php 
    foreach ($_SESSION['cart'] as $list) {
     ?>
     <tr>
      <td><?php echo $list['masp'] ;?></td>
      <td><?php echo  $list['tensp'];?></td>
      <td><?php echo number_format($list['dongia']); ?></td>
      <td><input type="text" value="<?php echo  $list['sl'] ;?>" name="sl[<?php echo $list['masp'];?>]"></td>
      <td><?php echo  number_format($list['sl']*$list['dongia']) ;?></td>
      <td><a href="delete.php?masp=<?php echo $list['masp'] ;?>" class="btn btn-danger">Delete</a></td>
     </tr>
     
   
 <?php } ?>
 <tr>
 </tr>
<input type="submit" value="Cập nhật" name="btup" class="btn btn-success">


   <?php } ?>
   
    </form>
    <a href="listsp.php"><button  class="btn btn-primary" >Quay lại</button></a>
  </tbody>
</table>	
 </div>
 </body>
 </html>