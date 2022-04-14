<?php 
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status_kerja = $_POST['status_kerja'];
    $lama_kerja = $_POST['lama_kerja'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];


    // direktur
    if($jabatan == "direktur"){
        $gaji = 10000000;

    }elseif($jabatan == "manager"){
        $gaji = 7500000;

    }elseif($jabatan == "Karyawan"){
        $gaji = 5000000;

    }elseif($jabatan == "OB"){
        $gaji = 2500000;

    }
    // akhir direktur
    
    // status kerja
    if($status_kerja == "tetap"){
        $bonus1 = 2500000;

    }elseif($status_kerja == "kontrak"){
        $bonus1 = 0;
    }
    // akhir status kerja

    // lama kerja
    if($lama_kerja > 10 ){
        $dapat1 = 1000000;

    }elseif($lama_kerja > 6 ){
        $dapat1 = 500000;

    }else{
        $dapat1 = 250000;

    }
    // akhir lama kerja

    // Total
    $total = ($gaji + $bonus1 + $dapat1) - ($pinjaman + $tabungan);
    // akhir Total

    function total($nama1, $jabatan1, $status_kerja1, $bonus11, $lama_kerja1, $dapat11,$pinjaman1, $tabungan1, $total1 ){
        echo "<h1><center> Struk Gaji </center> </h1>";
        echo "<fieldset>";
        echo "Nama : $nama1";
        echo "<hr>";
        echo "Jabatan : $jabatan1";
        echo "<hr>";
        echo "Status Kerja : $status_kerja1 ";
        echo "<hr>";
        echo "Bonus Status Kerja : Rp. " .number_format($bonus11,0,'','.');
        echo "<hr>";
        echo "Lama Kerja : $lama_kerja1 Hari";
        echo "<hr>";
        echo "Tunjangan Lama Kerja : Rp. " .number_format($dapat11,0,'','.');
        echo "<hr>";
        echo "<h2> Potongan </h2>";
        echo "Pinjaman : Rp. " .number_format($pinjaman1,0,'','.');
        echo "<hr>";
        echo "Tabungan : Rp." .number_format($tabungan1,0,"",".");
        echo "<hr>";
        echo "<h2> Total Gaji Bersih </h2>";
        echo "Total Gaji Bersih : Rp. ".number_format($total1,0,".",'.');

}
total($nama, $jabatan, $status_kerja, $bonus1, $lama_kerja, $dapat1,$pinjaman,$tabungan, $total );

}
?>