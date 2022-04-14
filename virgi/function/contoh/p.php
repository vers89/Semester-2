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

    //  total
    $total = ($gaji + $bonus1 + $dapat1) - ($pinjaman + $tabungan); ?>
    <!-- akhir total -->

        <?php
        function total($nama1, $jabatan1, $status_kerja1, $bonus11, $lama_kerja1, $dapat11,$pinjaman1, $tabungan1, $total1 ){
        ?>    
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!-- CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
            <!-- Akhir CSS -->
        </head>
        <body>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">jabatan</th>
                        <th scope="col">Gaji Pokok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                        <td> <?php echo $nama1; ?></td>
                        <td><?php echo $nama1; ?></td>
                        <td><?php echo $nama1; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>
<?php
}
total($nama, $jabatan, $status_kerja, $bonus1, $lama_kerja, $dapat1,$pinjaman,$tabungan, $total );


}
?>