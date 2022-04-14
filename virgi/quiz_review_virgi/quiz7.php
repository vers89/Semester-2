<?php

$total_harga=500000;

if($total_harga>=1000000){
    $diskon=0.10;
    $hasil=$total_harga*$diskon;
    echo "Anda mendapat diskon 10 %";
    echo "<br>";
    echo "Total yang harus dibayar Rp.$hasil";
}

else if($total_harga>=500000){
    $diskon=0.5;
    $hasil=$total_harga*$diskon;
    echo "Anda mendapat diskon 5 %";
    echo "<br>";
    echo "Total yang harus dibayar Rp.$hasil";

}
else if($total_harga>=300000){
    $diskon=0.2;
    $hasil=$total_harga*$diskon;
    echo "Anda mendapat diskon 2 %";
    echo "<br>";
    echo "Total yang harus dibayar Rp.$hasil";

}

else{
    echo "Anda tidak mendapat diskon";
    echo "<br>";
    echo "Total yang harus dibayar Rp.$total_harga";
}



?>