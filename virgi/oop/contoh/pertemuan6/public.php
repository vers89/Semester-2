<?php

class Produk
{
    public 
    $judul , 
    $penulis ,
    $penerbit ,
    $harga,
    $jumlah_halaman,
    $waktu_main;

    public function __construct($judul , $penulis , $penerbit , $harga , $jumlah_halaman , $waktu_main){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlah_halaman = $jumlah_halaman;
        $this->waktu_main = $waktu_main;

    }  
    
    public function getInfo(){
        return 
        " $this->penulis , $this->penerbit ";
    }


}

class Komik extends Produk{
    public function getInfo(){
        return "Komik : {$this->judul} | {$this->getInfo()} ({$this->harga}) - {$this->jumlah_halaman}";
    }
}

class Game extends Produk{
    public function getInfo(){
        return "Game : {$this->judul} | {$this->getInfo()} ({$this->harga}) ~ {$this->waktu_main}";
    }
}



$produk1 = new InfoProduk1("Naruto" , "Mashasi Kishimoto" , "Shonen Jump" , 45000 , 100 , null );
$produk2 = new InfoProduk2("Uncharted" , "Neil Druckman" , "Sony Computer" , 240000 , 0 , 50 );

echo $produk1->getInfo();
echo "<hr>";
echo $produk2->getInfo();

?>