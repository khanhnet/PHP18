
 <!DOCTYPE html>
 <html>
 <head>
 	<title>3.2</title>
 	<style type="text/css">
 		body {
 			text-align: center;
 			background-color: #ccccff;
 		}
 		input {
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 	<h1>Chuẩn hóa chuỗi đầu vào</h1>
 <form method="post" action="">
		<input type="text" name="name" placeholder=" Nhập chuỗi" required="">
		<br>
		<input type="submit" name="kq" value="Kết quả">
		
	</form>
	<?php 
	if (isset($_POST['kq']))
	{
		$name = isset($_POST['name']) ?$_POST['name'] : '';

		$name=trim($name);
		function chuan_hoa($name){
			return ucwords(strtolower($name));
		}

		if ($name=="") {
			echo '<p style="color: red;">Chuỗi không được để trống hoặc chỉ chứa khoảng cách</p>';
		} else {
			
	echo '<br>===>Chuỗi đã chuẩn hóa : '.chuan_hoa($name).'.';
		}

}
 ?>

 </body>
 </html>