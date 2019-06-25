<?php

  $name ="Zent Group - Be all you can be!";


// Cat chuoi theo ky tu mong muon
$data = explode(" ",$name);

echo "<pre>";
	print_r($data);
echo "</pre>";

// Ghép chuoi theo ky tu mong muon
$name_im = implode(" ",$data);

echo $name_im;
echo '<br> leng'.strlen($name);
// Thay the chuoi
echo "<br>".str_replace("all","tat ca",$name);
// Ham bam du lieu -> bao mat
echo "<br> Hàm băm dữ liệu:" .md5('123');

echo "<br> Hàm băm dữ liệu: " .sha1('123');
//cat chuoi Con
echo "<br> Cắt chuỗi con:".substr($name,0,5); // cat tu vi tri 2, chuoi con co do dai 10

echo "<br>".strstr($name,"Be");
// Cat chuoi con bat dau tu chu Be

// Tim vi tri cua chuoi Con
echo "<br>".strpos($name," ");
 // tim vi tri cua thang Be trong $name, tra ve false neu khong thay
// Tim vi tri cua chuoi Con tinh tu cuoi
 echo "<br>".strrpos($name," ");
 //viet hoa all
 echo "<br>".strtoupper($name);
 //viet thuong all
 echo "<br>".strtolower($name);
 //viet hoa tu :)
 echo "<br>".ucwords($name);

$st="LSP01";
echo '<br>'.substr($st,0,3);
?>