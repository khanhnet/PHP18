<?php 
$info1 = array();
$info1['name']='khanh';
$info1['coutry']='ha noi';
$info1['point'] = array('gk' =>'8' ,'ck' =>'9'  );
$info1['language'] = array(
'lap_trinh' =>array('java' ,'php','python' ), 
'ngon_ngu' =>array('anh' ,'nhat' ) 
);
echo "<pre>";
print_r($info1);
echo "</pre>";
echo "<br> name :".$info1['name'];
echo "<br> coutry :".$info1['coutry'];
echo "<br> diem_tb :".($info1['point']['ck']*0.7+$info1['point']['gk']*0.3);
echo "noai_ngu 1".$info1['language']['ngon_ngu']['0'];
 ?>