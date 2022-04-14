<?php

$nama = [
    ["nama"=>"Rohesa", "id"=>1, "kelas"=>"XI RPL 3", "jenis_kelamin"=>"Pria", "agama"=>"Islam"],
    ["nama"=>"Virgi", "id"=>2, "kelas"=>"XI RPL 3", "jenis_kelamin"=>"Pria", "agama"=>"Islam"],
    ["nama"=>"Wildan", "id"=>3, "kelas"=>"XI RPL 3", "jenis_kelamin"=>"Pria", "agama"=>"Islam"],
    ["nama"=>"Surya", "id"=>4, "kelas"=>"XI RPL 3", "jenis_kelamin"=>"Pria", "agama"=>"Islam"],
    ["nama"=>"Robby", "id"=>5, "kelas"=>"XI RPL 3", "jenis_kelamin"=>"Pria", "agama"=>"Islam"]

];

foreach($nama as $name){
    echo "" . $name['nama'],"<br>";
    echo "Id = " . $name['id'],"<br>";
    echo "Nama = " . $name['nama'],"<br>";
    echo "Kelas = " . $name['kelas'],"<br>";
    echo "Jenis Kelamin = " . $name['jenis_kelamin'],"<br>";
    echo "Agama = " . $name['agama'],"<br>";
    echo "<hr>";
   

}