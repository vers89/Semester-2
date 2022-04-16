<?php

class Hewan{
    public $warna = "Coklat";

    public function makan(){
        return "Saya makan";
    }
    public function bernafas(){
        return "Saya bernafas";
    }
}

class Kucing extends Hewan {
    public function bernafas(){
        return "Saya Bernafas dengan Paru - Paru";
    }

}

$kucing = new Kucing();
echo $kucing->warna . "<br>";
echo "{$kucing->makan()} <br>";
echo "{$kucing->bernafas()} <br>";
