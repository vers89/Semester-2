<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <form action="" method="POST">
        <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark mb-5">
            <div class="container mb-2 mt-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active btn btn-outline-light bg-danger text-white"" aria-current=" page"
                                href="soal1.php">
                                <h6>Soal 1</h6>
                            </a>
                        </li>
                        &nbsp;
                        <li class="nav-item">
                            <a class="nav-link active btn btn-outline-light bg-danger text-white" href="soal2.php">
                                <h6>Soal 2</h6>
                            </a>
                        </li>
                        &nbsp;
                        
                    </ul>

                </div>
            </div>
        </nav>

        <center>
            <h1>
                Soal 2
            </h1>
        </center>

        <div class="container pt-5">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>Pilih Progam</h4>
                </div>
            </div>
            <div class="row  justify-content-center fs-5">
                <div class="col-md-3 mb-3 ">1. Segitiga Siku - Siku</div>
            </div>
            <div class="row justify-content-center fs-5">
                <div class="col-md-3 mb-3">2. Segitiga Terbalik</div>
            </div>
            <div class="row justify-content-center fs-5">
                <div class="col-md-3 mb-3">3. Kebalikan Point 1</div>
            </div>
        </div>

        <center>
            <div class="mt-3">
                <div class="row">
                    <div class="col-lg-7 ">
                        <h6> <label for="">Pilih : </label>
                            <input type="number" name="pilih" id="nama1" class="form-control-5">
                        </h6>
                    </div>
                </div>
            </div>


            <div class="mt-2">
                <div class="row">
                    <div class="col-lg-6">
                        <h6> <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masukan Angka
                                &nbsp; : </label>
                            <input type="number" name="masuk" id="nama1" class="form-control-5" placeholder="">
                        </h6>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-7">
                        <button class="btn btn-primary" type="submit" name="simpan">Kirim</button>
                        <button class="btn btn-secondary" type="reset" name="reset">Reset</button>
                    </div>
                </div>
            </div>
        </center>
        </div>

    </form>

    <?php
    if(isset($_POST['simpan'])){
        $a = $_POST['pilih'];
        $m = $_POST['masuk'];

        if($a == 1){
            echo "<br>";
            echo "<b>Segitiga Siku Siku Angka</b><br>";
            echo "<br>";
            for($s = 1; $s <=$m; $s++){
                for($t=1; $t<=$s; $t++){
                    echo "&nbsp;$t ";
                }
                echo "</br>";
            }
        }
        else if($a == 2){
            echo "<br>";
            echo "<b><center>Segitiga Angka Terbalik </b><br>";
            echo "<br>";
            $d = $m;
            for($a = 1; $a <= $m; $a++){
                for ($b =1 ; $b <= $a; $b++){
                    echo " ";

                }

                for($c = 1; $c <= $d; $c++){
                    echo " $c ";
                }
                $d--;
                echo "</br>";
            }
            
        }
        else if($a == 3){
            echo "<br>";
            echo "<b>Segitiga Siku Siku Kebalikan Point 1 </b><br>";
            echo "<br>";
            $c = $m;
            for($a = 1; $a<=$m; $a++){
                for($b = $m; $b>=$c; $b--){
                    echo " &nbsp; $b ";
                }
                $c--;
                echo "</br>";
            }
            
        }
        else{
            echo "</br>";
            echo "</br>";
            echo "<center>";
            echo "<h5>";
            echo "Maaf Pilihan Anda Tidak Ada </br> ";
            echo "Silahkan Input Kembali !";
            echo "</h5>";
            echo "</center>";
        }
    }
    ?>
</body>