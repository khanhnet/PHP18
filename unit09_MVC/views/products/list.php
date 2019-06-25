<!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified CSS & JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 </head>
 <body >
    <legend><h1 class="text-center">Quản lí bán hàng</h1></legend>

   
    
 <div class="container " >
    <a href="?mod=product&act=add" class="btn btn-success">add</a>
    
    <p><?= isset($_COOKIE['msg'])? $_COOKIE['msg']:''; ?></p>
    <table id="myTable" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=0;
  foreach ($data as $row) {
        $i++;
     ?>
     <tr>
        <td><?= $i ?></td>
        <td><?= $row['CODE'] ?></td>
        <td><?= $row['NAME']?></td>
        
        <td><?= $row['QUANTITY'] ?></td>
        <td><?= number_format($row['PRICE']); ?></td>
        <td><a href="index.php?mod=product&act=detail&CODE=<?= $row['CODE'] ?>" class="btn btn-success">Detail</a>
        <a href="index.php?mod=product&act=edit&CODE=<?= $row['CODE'] ?>" class="btn btn-warning">uplate</a>  
        <a href="index.php?mod=product&act=delete&CODE=<?= $row['CODE'] ?>" class="btn btn-danger">delete</a> </td> 
     </tr>
 <?php } ?>
  </tbody>
</table>    
 </div>

 <script type="text/javascript">
     
     $(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script>
 </body>
 </html>