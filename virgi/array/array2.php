<?php


$artikel =[
    "judul" => "Belajar Progam PHP",
    "penulis" => "Petani Kode"
];

echo "<h1>Array 1 Dimensi</h1>";
echo "Judul &nbsp;&nbsp; : ".$artikel['judul']."<br>";
echo "Penulis : ".$artikel['penulis']."<br>";
  

echo "<br>";
echo "<br>";
echo "<br>";

$artikel2 =[
    [
        "judul" => "Belajar Pemrogamann PHP",
        "penulis" => "Petani Kode"
    ],
    [
        "judul" => "Belajar Array",
        "penulis" => "malasngoding"
    ],
    [
        "judul" => "Belajar Fungsi",
        "penulis" => "dicoding"
    ]
];

foreach($artikel2 as $data){
    echo "<h2>" . $data['judul'] . "</h2>";
    echo "<p>" . $data['penulis'] . "</p>";
    echo "<hr>";    
}

?>