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
    <a href="?mod=product&act=list" class="btn btn-success">back</a>
    <p><?= isset($_COOKIE['msg'])? $_COOKIE['msg']:''; ?></p>
    <hr>
        <form action="?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="CODE" value="<?= $details['CODE'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="NAME" value="<?= $details['NAME'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="QUANTITY" value="<?= $details['QUANTITY'] ?>">
            </div>
            <div class="form-group">
                <label for="">Giá </label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="PRICE" value="<?= $details['PRICE'] ?>">
            </div>
           
         
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>


</body>
</html>