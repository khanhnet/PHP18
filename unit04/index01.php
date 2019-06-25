<?php 
session_start();
if ($_SESSION['login']==1) {
    echo 'hello<br>';
    echo "<a href='logout.php'>logout</a>";
    
}else {
    header("Location: formpost.php");
}


?>
