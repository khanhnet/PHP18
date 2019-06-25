<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-color: #ccccff;
	}
	h1 {
		text-align: center;
	}
	h3 {
		text-align: center;
	}
	</style>
</head>
<body>
	<h1>TH gửi dữ liệu dùng POST</h1>
	<h3>Thông tin sinh viên</h3>

  
   <ul>
 	<li>Mã sinh viên :<?php echo $_POST['masv']; ?></li>
 	<li>Họ và tên :<?php echo $_POST['ho_ten']; ?></li>
 	<li>Số điện thoại :<?php echo $_POST['sdt']; ?></li>
 	<li>Email :<?php echo $_POST['email']; ?></li>
 	<li>Giới tính :<?php echo $_POST['check']; ?></li>
 	<li>Địa chỉ :<?php echo $_POST['address']; ?></li>
 </ul>

 <a href="4.1.php"><button >Back</button></a>



</body>
</html>

