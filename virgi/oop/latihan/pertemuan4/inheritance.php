<?php
class Mobil {
    public 
    $nama, 
    $merk="Merk", 
    $warna,
    $kecepatanmaksimal,
    $jumlahpenumpang; 
}
class Sport extends Mobil {
    public function turbo(){
        return "Jalankan Turbo";
    }

}
class Container extends Mobil {
    public function angkut(){
        return "Angkut Barang";
    }
}
class Ambulan extends Mobil {
    public function sirine(){
        return "Bunyikan Sirine";
    }
}

$mobil1 = new Sport();
$mobil1->warna="Merah";
echo "Warna Mobil : {$mobil1->warna} <br>";
echo "Merk : {$mobil1->merk} <br>";
echo $mobil1->turbo();
echo "<hr>";

$mobil2 = new Container();
$mobil2->warna="Hitam";
echo "Warna Mobil : {$mobil2->warna} <br>";
echo "Merk : {$mobil2->merk} <br>";
echo $mobil2->angkut();
echo "<hr>";

$mobil3 = new Ambulan();
$mobil3->warna="Putih";
echo "Warna Mobil : {$mobil2->warna} <br>";
echo "Merk : {$mobil2->merk} <br>";
echo $mobil3->sirine();
echo "<hr>";
?>