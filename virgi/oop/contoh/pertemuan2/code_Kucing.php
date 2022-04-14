<?php

class Kucing {
    public $warna1;
    public $nama;
    public $jk;
           
    public function __construct($a , $b , $c){

        $this->warna1=$a;
        $this->nama=$b;
        $this->jk=$c;
    }    
    
    public function DataKucing(){
        return
        "Nama : " . $this->nama . 
        "<br>warna1 : " . $this->warna1 . 
        "<br>Jenis Kelamin " . $this->jk;
    }

}
