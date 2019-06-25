<?php 

class Car
{
	var $name;
	var $gia;
	var $color;
	var $origin;

	function run(){
		echo "run now";
	}
}

$bmw=new Car();
$bmw->color='red';
$bmw->gia='3m';
$bmw->name='bmw';
$bmw->origin='germany';

echo '<br>BMW color :' . $bmw->color;
echo '<br>BMW gia :' . $bmw->gia;
echo '<br>BMW name :' . $bmw->name;
echo '<br>BMW origin :' . $bmw->origin . '<br>';
echo $bmw->run();

class DongVat  // Lớp Động vật
{
    // Thuộc Tính
    var $mat;
    var $mui;
    var $mieng;
    var $chan;
    var $gioitinh;
  
    // Hàm, phương thức
    function an(){
        echo "eat";
    }
  
    function ngu(){
        echo "sleep";
    }
  
    function chay(){
        echo "run";
    }
  
    function lahet(){
        // lệnh
    }
}

class ConTrau extends DongVat
{
	var $sung='2';
	function an(){
		echo "an co";
	}
	function soSung(){
		echo $this->sung;
	}
}

$contrau=new ConTrau();
echo $contrau->an() . '<br>';
echo $contrau->soSung();

//public moi noi
//protected chi trong class + class extends
//private chi trong class