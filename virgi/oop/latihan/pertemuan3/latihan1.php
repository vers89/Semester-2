<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 OOP</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th>Nama Peserta</th>
                <th> : </th>
                <th><input type="text" name="nama" required></th>
            </tr>
            <tr>
                <th>Nama Tim</th>
                <th> : </th>
                <th><input type="text" name="nama2" required></th>
            </tr>
            <tr>
                <th>Sponsor</th>
                <th> : </th>
                <th><input type="text" name="sponsor" required></th>
            </tr>
            <tr>
                <th>Speed Bike</th>
                <th> : </th>
                <th><input type="number" name="speed" required></th>
            </tr>
            <tr>
                <th>Health</th>
                <th> : </th>
                <th><input type="number" name="health" required></th>
            </tr>
            <tr>
                <th></th>
                <th>
                    <button type="submit" name="kirim" >KIRIM</button>
                    <button type="reset" name="k" >RESET</button>

                </th>
            </tr>
        </table>
    </form>
    <?php

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $tim = $_POST['nama2'];
        $sponsor = $_POST['sponsor'];
        $speed = $_POST['speed'];
        $health = $_POST['health'];

        class Balap
        {
            public 
            $nama,
            $tim,
            $sponsor,
            $speed,
            $health;
            
            public function __construct($nama, $tim, $sponsor, $speed, $health){
                $this->nama = $nama;
                $this->tim = $tim;
                $this->sponsor = $sponsor;
                $this->speed = $speed;
                $this->health = $health;
            }

            public function kecepatan(){
                if ($this->speed >= 100  ){
                    return "Speed bike anda tidak valid";
                }
                elseif ($this->speed <= 1 ) {
                    return "Speed bike anda tidak valid";
                }
                else{
                    return "Silahkan Balapan";
                }
            }
            public function kesehatan(){
                if ($this->health  > 70 ){
                    return "Anda lulus tes kesehatan ";
                }
                elseif ($this->health <= 70 && $this->health >= 50 ) {
                    return "Anda tidak fit, silahkan minum vitamin";
                }
                elseif ($this->health <= 50 && $this->health >= 1 ) {
                    return "Anda harus istirahat penuh ";
                }
                else{
                    return " Pembalap tim anda meninggal ";
                }
                
            }

        }

        $pembalap = new Balap($nama , $tim , $sponsor , $speed , $health);
        echo "<br>";
        echo "Nama Pembalap :  " . $pembalap->nama . "<br>";
        echo "Nama Tim :  " . $pembalap->tim . "<br>";
        echo "Sponsor :  " . $pembalap->sponsor . "<br>";
        echo "Speed Bike :  " . $pembalap->speed . " " .$pembalap->kecepatan() . "<br>";
        echo "Health Anda :  " . $pembalap->health . " " . $pembalap->kesehatan() . "<br>";

    }

    ?>
</body>
</html>