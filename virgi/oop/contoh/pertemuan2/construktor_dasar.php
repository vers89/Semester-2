<?php

class Kucing
{
    public $warna;
    public $jenis_kelamin;

    // construct adalah method khusus yang akan dipanggil pertama kali
    public function __construct($a,$b){
        $this->warna = $a;
        $this->jenis_kelamin = $b;

    }

    public function berburu(){
        return "Berburu Ikan ";
    }
}

$kucing = new Kucing("Hijau" , "Betina");
echo "Warna Kucing 1 : " . $kucing->warna . "<br>";
echo "Warna Kucing 1 : " . $kucing->jenis_kelamin . "<hr>";

$kucing2 = new Kucing("Hitam" , "Jantan");
echo "Warna Kucing 2 : " . $kucing2->warna . "<br>";
echo "Warna Kucing 1 : " . $kucing2->jenis_kelamin . "<hr>";

$kucing3 = new Kucing("Oren" , "Jantan");
echo "Warna Kucing 3 : " . $kucing3->warna . "<br>";
echo "Warna Kucing 1 : " . $kucing3->jenis_kelamin . "<hr>";
