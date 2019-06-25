
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">THÊM MỚI KHÁCH HÀNG</h3>
    <hr>
    <a href="?mod=customer&act=list" class="btn btn-success">back</a>
    <p><?= isset($_COOKIE['msg'])? $_COOKIE['msg']:''; ?></p>
        <form action="?mod=customer&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control"  placeholder="Mã khách hàng" name="CODE" >
            </div>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control"  placeholder="Nhập vào tên khách hàng" name="NAME">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control"  placeholder="Nhập vào email" name="EMAIL">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control"  placeholder="Nhập vào số điện thoại" name="MOBILE">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control"  placeholder="Nhập vào địa chỉ" name="ADDRESS">
            </div>

            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
   
</body>
</html>