<?php

class Animal {
	public $momo, $doggo, $zya, $masha;
}

class Kucing extends Animal {
	function bersuara(){
		return "Miaaaawwwwww";
	}
}

class Anjing extends Animal {
	function bersuara(){
		return "gukgukguk";
	}
}

class Elang extends Animal {
    function bersuara(){
        return "arrrrgghhh";
    }
}

class Bebek extends Animal {
    function bersuara(){
        return "kwekkwekkwek";
    }
}


$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->tidak_terbang = "tidak bisa terbang";
echo "Momo Adalah Kucing <br>";
echo "jumlah kakinya: ".$momo->jumlah_kaki. "<br>";
echo $momo->tidak_terbang. "<br>";
echo "suaranya adalah: ".$momo->bersuara(). "<br>";


echo "<hr>";


$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
$doggo->tidak_terbang = "tidak bisa terbang";
echo "Doggo Adalah Anjing <br>";
echo "jumlah kakinya: ".$doggo->jumlah_kaki. "<br>";
echo $doggo->tidak_terbang. "<br>";
echo "suaranya adalah: ".$doggo->bersuara(). "<br>";


echo "<hr>";


$zya = new Elang;
$zya->jumlah_kaki = 2;
$zya->bisa_terbang = "bisa terbang";
echo "Zya Adalah Elang <br>";
echo "jumlah kakinya: ".$zya->jumlah_kaki. "<br>";
echo $zya->bisa_terbang. "<br>";
echo "suaranya adalah: ".$zya->bersuara(). "<br>";


echo "<hr>";


$masha = new Bebek;
$masha->jumlah_kaki = 2;
$masha->bisa_terbang = "bisa terbang";
echo "Masha Adalah Bebek <br>";
echo "jumlah kakinya: ".$masha->jumlah_kaki. "<br>";
echo $masha->bisa_terbang. "<br>";
echo "suaranya adalah: ".$masha->bersuara(). "<br>";

 ?>
}