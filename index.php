<?php 

class hewan {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

class singa {
	function bersuara(){
		return $this->suara;
	}
}

$ehsan = new singa;
$ehsan->nama = "ehsan";
$ehsan->jumlah_kaki = 4;
$ehsan->bisa_terbang = "tidak bisa terbang";
$ehsan->suara = "roar-roaar";

echo $ehsan->nama. " adalah singa <br>";
echo "mempunyai kaki berjumlah ".$ehsan->jumlah_kaki;
echo "<br>";
echo $ehsan->bisa_terbang;
echo "<br>";
echo "bersuara ".$ehsan->bersuara();
echo "<hr>";

class ayam {
	function bersuara(){
		return $this->suara;
	}
}

$joni = new ayam;
$joni->nama = "joni";
$joni->jumlah_kaki = 2;
$joni->bisa_terbang = "bisa terbang";
$joni->suara = "kukuruyuk";

echo $joni->nama. " adalah ayam <br>";
echo "mempunyai kaki berjumlah ".$joni->jumlah_kaki;
echo "<br>";
echo $joni->bisa_terbang;
echo "<br>";
echo "bersuara ".$joni->bersuara();
echo "<hr>";


class kucing {
	function bersuara(){
		return $this->suara;
	}

}


$tabi = new kucing;
$tabi->nama = "tabi";
$tabi->jumlah_kaki = 4;
$tabi->bisa_terbang = "tidak bisa terbang";
$tabi->suara = "meong meong";

echo $tabi->nama. " adalah kucing <br>";
echo "mempunyai kaki berjumlah ".$tabi->jumlah_kaki;
echo "<br>";
echo $tabi->bisa_terbang;
echo "<br>";
echo "bersuara ".$tabi->bersuara();
echo "<hr>";


class anjing {
	function bersuara(){
		return $this->suara;
	}

}

$sparta = new anjing;
$sparta->nama = "sparta";
$sparta->jumlah_kaki = 4;
$sparta->bisa_terbang = "tidak bisa terbang";
$sparta->suara = "guk guk";

echo $sparta->nama. " adalah anjing <br>";
echo "mempunyai kaki berjumlah ".$sparta->jumlah_kaki;
echo "<br>";
echo $sparta->bisa_terbang;
echo "<br>";
echo "bersuara ".$sparta->bersuara();
echo "<hr>";
