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
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki - Laki" /> Laki -
                        Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Ortodoks">Kristen Ortodoks</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="30" rows="2" placeholder="Masukkan alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" value="Futsal">
                        <label for="vehicle1"> Futsal</label>
                        <input type="checkbox" name="hobi" value="Badminton">
                        <label for="vehicle1"> Badminton</label>
                        <input type="checkbox" name="hobi" value="Memancing">
                        <label for="vehicle1"> Memancing</label>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Menikah">Menikah</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Moto Hidup</td>
                    <td>:</td>
                    <td><textarea name="moto_hidup" id="" cols="30" rows="2"
                            placeholder="Masukkan Moto Hidup Anda"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama= $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $status = $_POST['status'];
    $moto_hidup = $_POST['moto_hidup'];

    function biodata($nama1, $tanggal_lahir1, $jenis_kelamin1,$agama, $alamat, $hobi, $status, $moto_hidup){
        echo "Nama : $nama1 <br>";
        echo "Tanggal Lahir : $tanggal_lahir1 <br>";
        echo "Jenis Kelamin : $jenis_kelamin1 <br>";
        echo "Agama : $agama <br>";
        echo "Alamat : $alamat <br>";
        echo "Hobi : $hobi<br>";
        if (count($hobi)==0){

        }else{
            echo "<ul>";
            for($i=0; $i < count($hobi); $i++){
                echo "<li> $hobi[$i] </li>";
            }
            echo "<ul>";
        }
        echo "Status : $status<br>";
        echo "Moto Hidup : $moto_hidup <br>";
    }
    
    biodata($nama,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$hobi,$status,$moto_hidup);
}