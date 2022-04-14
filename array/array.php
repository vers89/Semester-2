<?php

$judul = [
    ["Judul Buku"=>"Laskar Pelangi", "pengarang"=>"Andrea Hirata", "tahun terbit"=>2005],
    ["Judul Buku"=>"Raja yang Terpenjara", "pengarang"=>"Khalil Gibran", "tahun terbit"=>1999],
    ["Judul Buku"=>"Surat Kecil untuk Tuhan", "pengarang"=>"Agnes Davonner", "tahun terbit"=>2008],
    ["Judul Buku"=>"London", "pengarang"=>"Windy Ramadhina", "tahun terbit"=>2015]
];

foreach($judul as $buku){
    echo "<b>Judul Buku : </b> ". $buku['Judul Buku'],"<br>";
    echo "<b>Pengarang : </b>". $buku['pengarang'],"<br>";
    echo "<b>Tahun Terbit : </b>". $buku['tahun terbit'],"<br>","<hr>";

}

?>