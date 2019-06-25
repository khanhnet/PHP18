<?php 
function check_chan_le($num){
	if ($num%2==0) {
		echo $num.' so chan <br>';
	}else {
		echo $num.' so le <br>';
	}
}
function check_chan_le_xin($num){
	echo ($num%2==0)?$num.' so chan! <br>':$num.' so le! <br>';
}
check_chan_le(5);
check_chan_le_xin(10);

function tong($a,$b){
	echo '<br> tong 2 so '. $a.'+'.$b.'='.($a+$b);
}

$a=10;
$b=20;
function tinh_tong($a,$b){
	return ($a+$b);
}
$lang=$_GET['lang'];
if ($lang=='vi') {
	echo '<br> tong '.tinh_tong($a,$b);
	
}else {
	echo '<br> sum'.tinh_tong($a,$b);
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <br>
 <a href="ex01.php?lang=vi">viet</a>|
 <a href="ex01.php?lang=en">anh</a>
 </body>
 </html>

<?php 
// Biến toàn cục
$bien_toan_cuc = 12;
  
function kiem_tra()
{
    // Biến cục bộ
    $bien_cuc_bo = 13;
  
    // Lấy biến toàn cục
    global $bien_toan_cuc;
  
    // Lấy số dư biến cục bộ chia cho biến toàn cục và
    // kiểm trả về true nếu số dư = 0, ngược lại trả về false
    if ($bien_cuc_bo % $bien_toan_cuc){
        return true;
    }
    else{
        return false;
    }
}

// ham kiem tra
function kiem_tra1()
{
    // bien tinh
    static $a = 0;
    $a++;
    echo '<br>'.$a;
}
  
kiem_tra1();
kiem_tra1();

 ?>