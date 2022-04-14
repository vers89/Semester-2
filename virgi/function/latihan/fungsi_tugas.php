<?php

// Persegi Panjang
function persegi_panjang($panjang,$lebar){
    
    $luas = $panjang*$lebar;
    echo "Luas Persegi Panjang = $luas";

}

// Segitiga
function segitiga($alas,$tinggi){
    
    $luas = ($alas*$tinggi)/2;
    echo "Luas Segitiga = $luas";

}

// Persegi
function persegi($sisi){
    
    $luas = $sisi*$sisi;
    echo "Luas Persegi = $luas";

}

// Jajar Genjang
function jajar_genjang($alas, $tinggi){

    $luas = $alas * $tinggi;
    echo "Luas Jajar Genjang = $luas";
    
}

// Belah Ketupat
function belah_ketupat($d1, $d2){

    $luas =1/2 * ($d1 * $d2);
    echo "Luas Belah Ketupat = $luas";
    
}

// Keliling Layang - Layang
function layang_layang($a, $c){

    $kel = 2 * ($a + $c);
    echo "Keliling Layang - Layang = $kel";
    
}

// Keliling Trapesium
function trapesium($a, $b, $c, $d){

    $kel = $a + $b + $c + $d;
    echo "Keliling Trapesium = $kel";
    
}

// Luas Lingkaran
function lingkaran($jari){

    $phi = 22/7;
    $luas = $phi * ($jari * $jari) ;
    echo "Keliling Layang - Layang = $luas";
    
}


persegi_panjang(5,2);
echo "<hr>";
segitiga(4,2);
echo "<hr>";
persegi(2);
echo "<hr>";
jajar_genjang(4,5);
echo "<hr>";
belah_ketupat(4,5);
echo "<hr>";
layang_layang(4,5);
echo "<hr>";
trapesium(4,5,5,6);
echo "<hr>";
lingkaran(7);
echo "<hr>";


?>