
 <!DOCTYPE html>
 <html>
 <head>
 	<title>3.1</title>
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
 	<h1>Tách họ, đệm và tên từ chuỗi </h1>
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
$name=array(explode(" ",$name));
$ten = $name[0][count($name[0])-1];
echo "<br>Họ :". $name[0][0];
$del=array_shift($name[0]).array_pop($name[0]);
echo '<br> Đệm :';
foreach ($name[0] as $key => $value){
    echo "$value ";
}
echo "<br>Tên :". $ten;
	
	
}
		

 ?>
 </body>
 </html>