<?php
class HP {
    public $warna;
    public $processor;
    public $ram;
    
    public function infoHP(){
        return "Warna HP : " . $this->warna . "<br>Processor : " . $this->processor. "<br>RAM : " . $this->ram;
    }
    public function Hidup(){
        return "Hidupkan HP";
    } 
    public function Mati(){
        return "Matikan HP";
    } 
}

$HP1 = new HP() ;
$HP1->warna = "Hitam";
$HP1->processor = "Mediatek Dimensity 5000";
$HP1->ram = "12 GB";

echo $HP1->infoHP() . "<br>";
echo $HP1->Hidup() . "<hr>";


$HP2 = new HP() ;
$HP2->warna = "Putih";
$HP2->processor = "Snapdragon 1080";
$HP2->ram = "12 GB";

echo $HP1->infoHP() . "<br>";
echo $HP1->Hidup() . "<hr>";


$HP3 = new HP() ;
$HP3->warna = "Gradasi Ungu";
$HP3->processor = "Mediatek Dimensity 10000";
$HP3->ram = "12 GB";

echo $HP1->infoHP() . "<br>";
echo $HP1->Hidup() . "<hr>";

echo "<br><br><br><br>";

class Maung {
    public $warna = "Loreng";
    public $jenis_kelamin = "Laki - Laki";
    public $kaki = "4";
    
    public function bersuara(){
        return "Aing Maungg..!!";
    }
    public function berburu(){
        return "Rusa";
    } 
}

// $Maung1 = new Maung() ;
// echo "Warna Rambut : ". $Maung1->warna . "<br>";
// echo "Suara Maung : ". $Maung1->bersuara()."<hr>";

// $Maung2 = new Maung() ;
// $Maung2->warna = "Putih";
// echo "Warna Rambut : ". $Maung2->warna . "<br>";
// echo "Berburu : ". $Maung1->berburu()."<hr>";

// $Maung3 = new Maung() ;
// $Maung3->warna = "Hitam";
// echo "Warna Rambut : ". $Maung3->warna . "<br>";
// echo "Berburu : ". $Maung1->berburu()."<hr>";


?>