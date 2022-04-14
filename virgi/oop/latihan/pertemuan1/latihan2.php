<?php
class Laptop {
    public $pemilik;
    public $merk;
    public $ukuranlayar;
    
    public function infolaptop(){
        return
        "Pemilik : " . $this->pemilik . 
        "<br>Merk : " . $this->merk . 
        "<br>Ukuran Layar : " . $this->ukuranlayar;
    }
    public function Hidup(){
        return "Hidupkan Laptop";
    } 
    public function Mati(){
        return "Matikan Laptop";
    } 
}

$laptop = new Laptop() ;
$laptop->pemilik = "Virgi";
$laptop->merk = "HP";
$laptop->ukuranlayar = "14 inch";

echo $laptop->infolaptop() . "<br>";
echo $laptop->Hidup() . "<hr>";


$HP2 = new Laptop() ;
$HP2->pemilik = "Surya";
$HP2->merk = "Asus";
$HP2->ukuranlayar = "14 inch";

echo $HP2->infolaptop() . "<br>";
echo $HP2->Hidup() . "<hr>";


$HP3 = new Laptop() ;
$HP3->pemilik = "Wildan";
$HP3->merk = "Acer";
$HP3->ukuranlayar = "14 inch";

echo $HP3->infolaptop() . "<br>";
echo $HP3->Hidup() . "<hr>";


$HP4 = new Laptop() ;
$HP4->pemilik = "Rohesa";
$HP4->merk = "Macbook";
$HP4->ukuranlayar = "12 inch";

echo $HP4->infolaptop() . "<br>";
echo $HP4->Hidup() . "<hr>";


$HP5 = new Laptop() ;
$HP5->pemilik = "Rizal";
$HP5->merk = "Asus";
$HP5->ukuranlayar = "12 inch";

echo $HP5->infolaptop() . "<br>";
echo $HP5->Hidup() . "<hr>";


