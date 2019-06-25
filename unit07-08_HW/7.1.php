<?php 

include_once('connection.php');


$query = "SELECT * FROM employees";

	// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);
$employees=array(); 
while($row= $result->fetch_assoc()) { 
  $employees[]=$row;

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
  <legend><h1 class="text-center">Quản lí nhân viên</h1></legend>



  <div class="container "   >
     <a href="7.2.php" class="btn btn-success">Quản lí khách hàng</a>
    <a href="add_formNV.php" class="btn btn-primary">Thêm mới</a>
    <table id="myTable" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Mã nhân viên</th>
          <th scope="col">Tên nhân viên</th>
          <th scope="col">Email</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i=0;
        foreach ($employees as $row) {
          $i++;
          ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['CODE'] ?></td>
            <td><?= $row['NAME']?></td>
            <td><?= $row['EMAIL']?></td>
            <td><?= $row['MOBILE']?></td> 
            <td><?= $row['ADDRESS'] ?></td>
            <td><a href="details.php?CODENV=<?= $row['CODE'] ?>" class="btn btn-success" >DETAILS</a>
              <a href="product_edit.php?CODENV=<?= $row['CODE'] ?>" class="btn btn-warning">EDIT</a>
              <a href="delete.php?CODENV=<?= $row['CODE'] ?>" class="btn btn-danger">DEL</a>
            </td>  
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