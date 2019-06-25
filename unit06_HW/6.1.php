<?php 

class Products
{
	var $id='';
	var $name='';
	var $amount='';
	var $price='';
	var $origin='';

	function PrintInformation(){
		 echo '<ul>
     	<li>Mã sản phẩm : ' . $this->id . '</li>
     	<li>Tên sản phẩm : ' . $this->name . '</li>
     	<li>Số lượng : ' . $this->amount . '</li>
        <li>Đơn giá : ' . number_format($this->price) . '</li>
     	<li>Hãng sản xuất : ' . $this->origin . '</li>
     </ul>';
	}
}

$ip5=new Products();
$ip5->id='05';
$ip5->name='Iphone 5';
$ip5->amount='5';
$ip5->price='2000000';
$ip5->origin='Apple';

echo $ip5->PrintInformation();

$ip6=new Products();
$ip6->id='06';
$ip6->name='Iphone 6';
$ip6->amount='6';
$ip6->price='4000000';
$ip6->origin='Apple';

echo $ip6->PrintInformation();

$ip7=new Products();
$ip7->id='07';
$ip7->name='Iphone 7';
$ip7->amount='7';
$ip7->price='9000000';
$ip7->origin='Apple';

echo $ip7->PrintInformation();