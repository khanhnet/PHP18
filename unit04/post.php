<?php 
session_start();
if (isset($_POST['submit'])) {

	$user =$_POST['user'];
	$pass =$_POST['pwd'];

	if ($user=='admin'&& $pass=='12345') {
		$_SESSION['login'] =1;
		
		header("Location: index01.php");
	}else{
		$_SESSION['login']= 0;
		setcookie('mess',' <h5 style="color: red">Login thất bại</h5>',time()+5);
		header("Location: formpost.php");
	}

}
	// echo '<br>user : '.$_POST['user'];
	// echo '<br>password : '.$_POST['pwd'];



 ?>
