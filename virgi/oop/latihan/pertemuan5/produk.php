<?php
class Produk
{
    public $nama , $jumlah , $metode;

    public function __construct($a , $c , $d){
        $this->nama = $a ;
        $this->jumlah = $c ;
        $this->metode = $d ;
    }

    public function harga(){

        if($this->nama == "T-Shirt Einstein"){
            return  $ket = 70000; 
        }
        else if($this->nama == "Cosmic Sweater Canva"){
            return  $ket = 179000; 
        }
        else if($this->nama == "Denim Jimmy and Martin"){
            return  $ket = 120000; 
        }
        else if($this->nama == "Kemeja Watchout"){
            return  $ket = 145000; 
        }
        else if($this->nama == "Kemeja Biasa"){
            return  $ket = 55000; 
        }
        else if($this->nama == "TMT Hawaiian Shit"){
            return  $ket = 159000; 
        }
        else if($this->nama == "Kaos Oblong Premium"){
            return  $ket = 100000; 
        }
        
    }

    public function hasil(){

        $hasil = $this->harga() * $this->jumlah;
        return $hasil;

        
    }
    
    public function discount(){

        if($this->hasil() >= 150000 && $this->hasil() < 250000){
            return  $diskon = 0.10 * $this->hasil();  
        }
        elseif ($this->hasil() >= 250000) {
            return  $diskon = 0.15 * $this->hasil();  
            
        }
        else{
            return $diskon = 0;
        }
        

    }

    public function discountPersen(){

        if($this->hasil() >= 150000 && $this->hasil() < 250000){
            return  $diskon = " (10%)";  
        }
        elseif ($this->hasil() >= 250000) {
            return  $diskon = " (15%)";  
            
        }
        else{
            return $diskon = "(-)";
        }
        

    }   
       

    public function cashback(){

        if($this->metode == "M-Banking"){
            return  $cashback = 0.025 * $this->hasil(); 
        }
        else if($this->metode == "Gopay"){
            return  $cashback = 0.10 * $this->hasil(); 
        }
        else if($this->metode == "pickUp"){
            return  $cashback = 0.015 * $this->hasil(); 
        }
        else if($this->metode == "Cash"){
            return  $cashback = 0 * $this->hasil(); 
        }
        
    }

    public function cashbackPersen(){

        if($this->metode == "M-Banking"){
            return  " (2,5%)"; 
        }
        else if($this->metode == "Gopay"){
            return  " (10%)"; 
        }
        else if($this->metode == "pickUp"){
            return  " (1,5%)"; 
        }
        else if($this->metode == "Cash"){
            return  " (-)"; 
        }
        
    }

    public function jumlahDibayar(){
        $hasil = $this->hasil() - $this->discount() - $this->cashback();
        return $hasil;
    }

}