<?php 
$array = array('khanh',26,03,2000  );
var_dump($array);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>hello".$array[0];
//arr tuan tu
$info = array();
$info[0]='khanh';
$info[1]='ha noi';
echo "<br> name :".$info[0];
echo "<br> coutry :".$info[1];

//arr ko tuan tu
$info1 = array();
$info1['name']='khanh';
$info1['coutry']='ha noi';
echo "<br> name :".$info1['name'];
echo "<br> coutry :".$info1['coutry'];

foreach ($info1 as $key => $value) {
	echo "<br> key: $key --- value: $value";
}
foreach ($info as $val) {
	echo "<br> $val";
}
 $del = array_shift($array); // tra ve phan tu da xoa

  echo "Phần tử bị xóa là : " . $del;

  echo "<pre>";
    print_r($array);
  echo "</pre>";

 ?>