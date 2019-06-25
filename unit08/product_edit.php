<?php 

include_once('connection.php');

$CODE=$_GET['CODE'];

$query = "SELECT * FROM products WHERE CODE = '".$CODE."' " ;

    // Thuc thi cau lenh truy van co so du lieu
    $result = $conn->query($query);

    $edit = $result->fetch_assoc();
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">Sửa SẢN PHẨM</h3>
    <hr>
        <form action="product_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="CODE" value="<?= $edit['CODE'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="NAME" value="<?= $edit['NAME'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="QUANTITY" value="<?= $edit['QUANTITY'] ?>">
            </div>
            <div class="form-group">
                <label for="">Giá </label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="PRICE" value="<?= $edit['PRICE'] ?>">
            </div>
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="TYPE" value="<?= $edit['TYPE'] ?>">
            </div>

             <div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                 <input type="file" name="PICTURE" id="PICTURE" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>

    <script type="text/javascript">
        function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#PICTURE").change(function() {
  readURL(this);
});
    </script>
</body>
</html>