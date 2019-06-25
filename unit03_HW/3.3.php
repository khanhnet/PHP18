
 <!DOCTYPE html>
 <html>
 <head>
 	<title>3.3</title>
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
 	<h1>Kiểm tra chuỗi palindrome</h1>
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
function check_palindrome($name){
	if (strlen($name)<2) {
		return 1;	
	}else {
		if ($name[0]!=$name[strlen($name)-1]) {
			return 0;	
		}
		return check_palindrome(substr($name,1,(strlen($name)-2)));
	}
}
if ($name=="") {
			echo '<p style="color: red;">Chuỗi không được để trống hoặc chỉ chứa khoảng cách</p>';
		} else {
			
	if (check_palindrome($name)==1) {
	echo "===>Là chuỗi palindrome";
}else{
	echo '===>Không là chuỗi palindrome';
}
		}




	
	
}
		

 ?>
 </body>
 </html>