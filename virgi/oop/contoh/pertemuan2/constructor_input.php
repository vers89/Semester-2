<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Isi Data Kucing</legend>
        <form action="" method="post">
            <label for="">Nama Kucing</label>
            <input type="text" name="nama" required>
            <br>
            <label for="">Warna Kucing</label>
            <input type="text" name="warna" required>
            <br>
            <label for="">Jenis Kelamin Kucing</label>
            <input type="radio" name="jk" required value="Jantan"> Jantan
            <input type="radio" name="jk" required value="Betina"> Betina
            <br>
            <button type="submit" name="submit">Simpan</button>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $warna = $_POST['warna'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
        
            // Mengimpor semua code program dari kucing.php
            require_once("./code_Kucing.php");
            $kucing = new Kucing($warna , $nama , $jk );
            echo $kucing->DataKucing();
        }
        ?>
    </fieldset>
</body>
</html>

