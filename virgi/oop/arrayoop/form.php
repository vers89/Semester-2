<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Array Form OOP</title>
</head>
<body>

    <center>

        <form action="" method="post">
            <h2>Data Siswa XI RPL 3</h2>
            <table>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="PROSES"></td>
                </tr>
            </table>
        </form>

        <br><br>


        <?php
            if(isset($_POST['proses'])){
                $jumlah = $_POST['jumlah'];
        ?>

        <form action="hasilarrayoop.php" method="post">
            <table>
                <?php
                    for($i=1; $i<=$jumlah; $i++){


                ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td>Data Siswa Ke -<?php echo$i; ?></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="number" name="nis[]" placeholder="Masukkan NIS"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama[]" placeholder="Masukkan Nama"></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>:</td>
                    <td>
                        <select name="kelas[]" id="">
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan[]" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin[<?php echo ($i - 1) ?>]" value="Laki - Laki" /> Laki -
                        Laki
                        <input type="radio" name="jenis_kelamin[<?php echo ($i - 1) ?>]" value="Perempuan" /> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td>:</td>
                    <td>
                        <select name="agama[]" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td><textarea name="alamat[]" id="" cols="30" rows="2" placeholder="Masukkan alamat"></textarea>
                    </td>
                </tr>



                <?php
            }
            ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </center>
    
</body>
</html>