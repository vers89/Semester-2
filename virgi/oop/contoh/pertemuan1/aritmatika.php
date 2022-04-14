<?php
class Aritmatika{

    public $bil1;
    public $bil2;

    public function pertambahan(){
        return
        $hasil = $this->bil1 + $this->bil2;
    }
    public function pengurangan(){
        return 
        $hasil = $this->bil1 - $this->bil2;
        
    }
    public function perkalian(){
        return
        $hasil = $this->bil1 * $this->bil2;
        
    }
    public function pembagian(){
        return 
        $hasil = $this->bil1 / $this->bil2;
        
    }
    public function modolus(){
        return
        $hasil = $this->bil1 % $this->bil2;
        
    }
}

$hitung = new Aritmatika();
$hitung->bil1 = 14;
$hitung->bil2 = 5;

echo "Pertambahan $hitung->bil1 + $hitung->bil2 = " . $hitung->pertambahan() . "<hr>";

$hitung = new Aritmatika();
$hitung->bil1 = 10;
$hitung->bil2 = 6;

echo "Pengurangan $hitung->bil1 - $hitung->bil2 = " . $hitung->pengurangan() . "<hr>";

$hitung = new Aritmatika();
$hitung->bil1 = 90;
$hitung->bil2 = 5;

echo "Perkalian $hitung->bil1 * $hitung->bil2 = " . $hitung->perkalian() . "<hr>";

$hitung = new Aritmatika();
$hitung->bil1 = 98;
$hitung->bil2 = 5;

echo "Pembagian $hitung->bil1 / $hitung->bil2 = " . $hitung->pembagian() . "<hr>";

$hitung = new Aritmatika();
$hitung->bil1 = 47;
$hitung->bil2 = 5;

echo "Modulus $hitung->bil1 / $hitung->bil2 = " . $hitung->modolus() . "<hr>";

