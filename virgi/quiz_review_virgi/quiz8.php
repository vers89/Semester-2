<?php

$pilih=7;

if($pilih==1){
    echo "Hello World !";
}

else if($pilih==2){
    $nama="Virgi Septian";
    $umur=16;
    $hobi="Badminton";
    $cita="Progammer";
    $sekolah="SMK Assalaam Bandung";

    echo "Nama Saya Adalah $nama";
    echo "<hr>";
    echo "Umur Saya Adalah $umur";
    echo "<hr>";
    echo "Hobi Saya Adalah $hobi";
    echo "<hr>";
    echo "Cita - Cita Saya Adalah $cita";
    echo "<hr>";
    echo "Saya sekolah di $sekolah";
}

else if($pilih==3){
    $no1=4;
    $no2=2;
    // Kali
    $hasil=$no1*$no2;
    echo "Hasil Kali = $hasil";

    echo "<hr>";

    // Bagi
    $hasil=$no1/$no2;
    echo "Hasil Bagi = $hasil";

    echo "<hr>";

    // Tambah
    $hasil=$no1+$no2;
    echo "Hasil Tambah = $hasil";

    echo "<hr>";

    // Kurang
    $hasil=$no1-$no2;
    echo "Hasil Kurang = $hasil";
}

else if($pilih==4){
    echo "<h2> Lingkaran </h2>";

    $jari=7;
    $phi=22/7;


    $hasil=$phi*($jari*$jari);

    echo "Hasil Luas Lingkaran = $hasil";

    echo "<hr>";

    // Segitiga
    echo "<h2> Segitiga </h2>";

    $alas=3;
    $tinggi=4;

    $hasil=($alas*$tinggi)/2;

    echo "Hasil Luas Segitiga = $hasil";
}

else if($pilih==5){
    $nilai=80;

    if($nilai==80){
        echo "Grade A";
    }
    else{
        echo "Eror !";
    }
}

else if($pilih==6){
    $nilai=8;

    if ($nilai % 2 == 0){ 
        echo "$nilai Adalah Bilangan Genap"; 
    }else {
        echo "$nilai Adalah Bilangan Ganjil"; 
    }
    
}

else if($pilih==7){
    $total_harga=200000;

    if($total_harga>=1000000){
        echo "Anda mendapat diskon 10 %";
    }

    else if($total_harga>=500000){
        echo "Anda mendapat diskon 5 %";

    }
    else if($total_harga>=300000){
        echo "Anda mendapat diskon 2 %";

    }

    else{
        echo "Anda tidak mendapat diskon";
    }
}
?>