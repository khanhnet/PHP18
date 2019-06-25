<?php 
$arr = array('1','4','2','6','9','100','4');
echo  "<pre>";
       print_r($arr);
    echo "</pre>";

    sort($arr);
foreach ($arr as $key => $val) {
    echo " $val \n";
}




 ?>
