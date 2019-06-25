<?php 

    //Ket noi co so du lieu

    // Thong so ket noi CSDL
   include_once('connection.php');
   if (isset($_GET['TYPE_CODE'])) {
     $query = "SELECT p.*, t.TYPE_NAME FROM products p JOIN products_type t ON p.TYPE = t.TYPE_CODE WHERE t.TYPE_CODE= '".$_GET['TYPE_CODE']."'";
   } else {
     
    $query = "SELECT p.*, t.TYPE_NAME FROM products p JOIN products_type t ON p.TYPE = t.TYPE_CODE";
   }

    // Cau lenh truy van co so du lieu
//SELECT products.*, products_type.TYPE_NAME FROM products  JOIN products_type  ON products.TYPE = products_type.TYPE_CODE
    $query_pt="SELECT * FROM products_type"; //lay tât cả bảng
    // Thuc thi cau lenh truy van co so du lieu
    $data=array();
    $result = $conn->query($query);

     while($row = $result->fetch_assoc()) { 
        $data[]=$row;

}


$result_pt = $conn->query($query_pt);
$data_type=array();
     while($row_pt = $result_pt->fetch_assoc()) { 
        $data_type[]=$row_pt;
}


 ?>


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

     <?php 
    foreach ($data_type as $row_pt) {
     ?>
     <a href="listsp.php?TYPE_CODE=<?= $row_pt['TYPE_CODE'] ?>"><?= $row_pt['TYPE_NAME'] ?></a>
 <?php } ?>
    <table id="myTable" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Loại sản phẩm</th>
      <th scope="col">Ảnh sản phẩm</th>
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
        <td><?= $row['NAME']?></td>
        <td><img width="50px" src="images/products/<?= $row['PICTURE']?>"></td>
        <td><?= $row['QUANTITY'] ?></td>
        <td><?= number_format($row['PRICE']); ?></td>
        <td><a href="details.php?CODE=<?= $row['CODE'] ?>" class="btn btn-success">DETAILS</a></td> 
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