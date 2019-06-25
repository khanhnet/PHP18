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

  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="post4.1.php" method="POST" role="form">
            <legend class="text-center"><h2>Thực hành gửi và nhận dữ liệu từ form sử dụng phương thức POST</h2></legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="masv" required="">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="ho_ten" required="">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập số điện thoại" name="sdt" required="">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email" required="">
            </div>  
             <div class="form-group">
                <label for="">Giới tính</label>
            <input type="radio" value="Nam"  name="check" checked="">Nam
            <input type="radio" value="Nữ"  name="check">Nữ  
            <input type="radio" value="Khác" name="check">Khác
            </div>
            <div class="form-group">
                <label for="">Đia chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address" required="">
            </div>  
              
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>