<?php
    if(isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas= $_POST['kelas'];
        $jurusan= $_POST['jurusan'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $agama= $_POST['agama'];
        $alamat= $_POST['alamat'];
    }

    require_once ("class.php");

    $data = new DataSiswa($nis,$nama,$kelas,$jurusan,$jenis_kelamin,$agama,$alamat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>

    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table class = "table table-bordered ">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <?php
                        for($a=0; $a<count($data->getNama()); $a++){
                    ?>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $data->getNis()[$a]; ?></td>
                    <td><?php echo $data->getNama()[$a]; ?></td>
                    <td><?php echo $data->getKelas()[$a]; ?></td>
                    <td><?php echo $data->getJurusan()[$a]; ?></td>
                    <td><?php echo $data->getJenisKelamin()[$a]; ?></td>
                    <td><?php echo $data->getAgama()[$a]; ?></td>
                    <td><?php echo $data->getAlamat()[$a]; ?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>