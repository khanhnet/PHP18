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
    <h3 align="center">SỬA THÔNG TIN KHÁCH HÀNG</h3>
    <a href="?mod=customer&act=list" class="btn btn-success">back</a>
    <p><?= isset($_COOKIE['msg'])? $_COOKIE['msg']:''; ?></p>
    <hr>
        <form action="?mod=customer&act=update" method="POST" role="form" enctype="multipart/form-data">
             <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control" readonly="" name="CODE" value="<?= $details['CODE']?>">
            </div>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control"  name="NAME" value="<?= $details['NAME']?>">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control"   name="EMAIL" value="<?= $details['EMAIL']?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control"   name="MOBILE" value="<?= $details['MOBILE']?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="ADDRESS" value="<?= $details['ADDRESS']?>">
            </div>

           
         
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>


</body>
</html>