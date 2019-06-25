
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
    <h3 align="center">THÊM MỚI NHÂN VIÊN</h3>
    <hr>
        <form action="add_processNV.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="ID" name="CODE" >
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào " name="NAME">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Email" name="EMAIL">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="MOBILE">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ADDRESS">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        <a href="7.1.php" class="btn btn-primary">Trở lại</a>
        </form>
    </div>
</body>
</html>