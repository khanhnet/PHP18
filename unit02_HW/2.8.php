<?php 
$arr = array('1','4','2','6','9','100','45','8','20');
echo  "<pre>";
       print_r($arr);
    echo "</pre>";
$max =null;
$gt=null;
for ($i = 0; $i < count($arr) ; $i++) {
	if ($max == null){
        $max = $arr[$i];
        $gt = $i;
    }
    else {
        if ($arr[$i] > $max){
            $max = $arr[$i];
            $gt = $i;
        }
    }
	
}
echo 'Max ='.$max;


 ?>