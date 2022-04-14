<?php

// mengidntifikasikan sebuah class
class Kucing 
{
    // MEMbuat property atau attributes
    public $warna = "coklat";
    public $jumlahkaki= "4";
    public $jenisbulu = "panjang";
    public $makananfavorit = "ikan pindang";

    // membuat method (behaviour)
    public function bersuara(){
        return "meong..meong...meong....";
    }

    public function berburu(){
        return "berburu ikan";
    }
}

// Membuat object (inisiasi object)
$Kucing = new Kucing();
echo "warna kucing : ". $Kucing->warna."<br>";
echo "sifat kucing : ".$Kucing->bersuara()."<hr>";

$Kucing2 = new Kucing();
// Set Warna kucing
$Kucing2->warna ="Oren";
echo "Warna Kucing : ". $Kucing2->warna."<br>";
echo "Sifat Kucing : ". $Kucing2->berburu()."<hr>";


?>