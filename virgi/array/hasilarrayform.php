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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <?php
                    for($a=0; $a<count($nama); $a++){
                ?>

            </tr>
            <tr>
                <td><?php echo $nis[$a]; ?></td>
                <td><?php echo $nama[$a]; ?></td>
                <td><?php echo $kelas[$a]; ?></td>
                <td><?php echo $jurusan[$a]; ?></td>
                <td><?php echo $jenis_kelamin[$a]; ?></td>
                <td><?php echo $agama[$a]; ?></td>
                <td><?php echo $alamat[$a]; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>