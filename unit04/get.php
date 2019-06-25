<?php 
   echo 'Tên đăng nhập: '.$_GET['user'].'<br>';
   echo 'Mật khẩu: '.$_GET['pwd'].'<br>';

   if (isset($_GET['check'])) {
   	
   echo $_GET['check'];
   }else {
   	echo '<br>off';
   }
?>