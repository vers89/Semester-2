<?php

class Komputer {
    public 
    $merk,
    $processor,
    $memori;

    public function beli_Komputer(){
        return "Beli Komputer Baru";
    }
}

class Laptop extends Komputer {
    public function lihat_Spec(){
        return "Merk : {$this->merk} , Processor: {$this->processor} , Memori : {$this->memori}";
    }
}

$beli = new Laptop();
// set property laptop dari komputer
$beli->merk = "ASUS";
$beli->processor = "Intel Core i5";
$beli->memori = "4GB";

echo "{$beli->beli_Komputer()} <br>";
echo $beli->lihat_Spec();