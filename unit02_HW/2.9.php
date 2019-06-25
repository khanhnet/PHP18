<?php 
$arr = array('1','4','2','6','9','100','4');
echo  "<pre>";
       print_r($arr);
    echo "</pre>";

echo '<br>Mảng khi  in ra: ';
    for ($i = count($arr)-1; $i >=0 ; $i--) {
    	echo $arr[$i] ."\n";
    }




 ?>