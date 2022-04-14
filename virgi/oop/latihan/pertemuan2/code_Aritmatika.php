<?php
class Aritmatika 
            {
                public $bil1;
                public $bil2;

                public function __construct($a , $b){
                    $this->bil1 = $a;
                    $this->bil2 = $b;
                }

                public function penjumlahan(){
                    return $this->bil1 + $this->bil2;
                }

                public function pengurangan(){
                    return $this->bil1 - $this->bil2;
                }
                public function perkalian(){
                    return $this->bil1 * $this->bil2;
                }
                public function pembagian(){
                    return $this->bil1 / $this->bil2;
                }
                public function modulus(){
                    return $this->bil1 % $this->bil2;
                }

            }
?>



<!-- $jumlah = $this->bil1 + $this->bil2;
$kurang = $this->bil1 - $this->bil2;
$kali = $this->bil1 * $this->bil2;
$bagi = $this->bil1 / $this->bil2;
$modulus = $this->bil1 % $this->bil2;

return

"Hasil Pemjumlahan :  $this->bil1 + $this->bil2 = " . $jumlah . "<br>".
"Hasil Pengurangan :  $this->bil1 - $this->bil2 = " .  $kurang . "<br>".
"Hasil Perkalian : $this->bil1 * $this->bil2 = " . $kali . "<br>".
"Hasil Pembagian :  $this->bil1 / $this->bil2 = " . $bagi . "<br>".
"Hasil Modulus : $this->bil1 % $this->bil2 = " . $modulus . "<br>"; -->