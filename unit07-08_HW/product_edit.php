<?php 

include_once('connection.php');

if (isset($_GET['CODENV'])) {
        $CODE = $_GET['CODENV'];
        $e='CODENV';

    $query = "SELECT * FROM employees WHERE CODE = '".$CODE."'";

    }
    if (isset($_GET['CODEKH'])) {
        $CODE = $_GET['CODEKH'];
        $e='CODEKH';

    $query = "SELECT * FROM customers WHERE CODE = '".$CODE."'";
     
    }

    // Thuc thi cau lenh truy van co so du lieu
    $result = $conn->query($query);

    $edit = $result->fetch_assoc();
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">CẬP NHẬT THÔNG TIN</h3>
    <hr>
        <form action="product_edit_process.php?<?= $e ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã </label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="CODE" value="<?= $edit['CODE'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên </label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="NAME" value="<?= $edit['NAME'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào Email" name="EMAIL" value="<?= $edit['EMAIL'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vàoSố điện thoại" name="MOBILE" value="<?= $edit['MOBILE'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ADDRESS" value="<?= $edit['ADDRESS'] ?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>