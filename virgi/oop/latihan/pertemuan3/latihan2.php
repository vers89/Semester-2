<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body style="color: aliceblue; background: rgb(164, 244, 255);" >
    <!-- isi -->
    <form action="" method="post">
        <div class="container-fluid mt-3" >
            <div class="card pb-5 bg-info">

                <table class="table bg-primary" style="color: aliceblue;">
                    <tr>
                        <td> <b> <h5 style="color: yellow;">Data Pembagian Raport</h5> </b> </td>
                    </tr>
                </table>

                <!-- row -->
                <div class="row justify-content-center ">

                    <!-- col 1 -->
                    <div class="col-md-4">

                        <!-- Judul -->
                        <center class="mb-4">
                            <h1 class="bg-warning rounded" >Data Siswa</h1>
                        </center>
                        <!-- >> Judul -->

                        <div class="mb-3 ">
                            <label class="form-label">Nama Siswa </label>
                            <input required placeholder="Masukkan nama siswa" type="name" name="nama" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Kelas </label>
                            <select class="form-select" name="kelas" aria-label="Default select example">
                                <option selected> --- Pilih Kelas --- </option>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIS </label>
                            <input required placeholder="Masukkan NIS" required type="number" name="nis" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mapel </label>
                            <input required placeholder="Masukkan Mapel" required type="text" name="mapel" class="form-control">
                        </div>
                        
                        
                    </div>
                    <!-- >> col 1 -->

                    <!-- col 2 -->
                    <div class="col-md-4">

                        <center class="mb-4">
                            <h1 class="bg-warning rounded">Nilai Siswa</h1>
                        </center>

                    
                        <div class="mb-3">
                            <label class="form-label">Nilai Harian</label>
                            <input required placeholder="Masukkan nilai harian" required type="number" name="nh" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai Ujian Tengah Semester</label>
                            <input required placeholder="Masukkan nilai UTS " required type="number" name="nuts" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai Ujian Akhir Semester </label>
                            <input required placeholder="Masukkan nama UAS" required type="number" name="nuas" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Absensi</label>
                            <input required required placeholder="Masukkan nilai absensi" type="number" name="absen" class="form-control ">
                        </div>
                    </div>
                    <!-- >> col 2 -->
                </div>
                <!-- >> row -->
                <center>
                    <div class="btn-group mt-4" role="group" aria-label="Basic mixed styles example">
                        <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                        <button type="button" class="btn btn-danger">RESET </button>
                    </div>
                </center>
            </div>
        </div>
    </form>
    <?php

    if (isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nis = $_POST['nis'];
        $mapel = $_POST['mapel'];
        $nh = $_POST['nh'];
        $nuts = $_POST['nuts'];
        $nuas = $_POST['nuas'];
        $absen = $_POST['absen'];

        class NilaiRaport
        {
            public $nama , $kelas , $nis , $mapel , $nh , $nuts , $nuas , $absen;

            public function __construct($a , $b , $c , $d , $e , $f , $g ,$h){
                $this->nama = $a ;
                $this->kelas = $b ;
                $this->nis = $c ;
                $this->mapel = $d ;
                $this->nh = $e ;
                $this->nuts = $f ;
                $this->nuas = $g;
                $this->absen = $h ;
            }

            public function rata_rata(){
                
                $hasil_nh = 0.45 * $this->nh;

                $hasil_nuts = 0.20 * $this->nuts;

                $hasil_nuas = 0.20 * $this->nuas;

                $hasil_absen = 0.15 * $this->absen;

                $hasil_rata = $hasil_nh + $hasil_nuts +  $hasil_nuas + $hasil_absen;
                return $hasil_rata;

                
            }

            public function grade(){
                if ($this->rata_rata() >= 85 && $this->rata_rata()  <=100 ){
                    $ket = "A";
                }
                elseif ($this->rata_rata() >= 75 && $this->rata_rata() < 85) {
                    $ket = "B";
                }
                elseif ($this->rata_rata() >= 60 && $this->rata_rata() < 75) {
                    $ket = "C";
                }
                elseif ($this->rata_rata() >= 40 && $this->rata_rata() < 60) {
                    $ket = "D";
                }
                else {
                    $ket = "E";
                }
                return $ket;

            }
            
            public function status(){
                if ($this->rata_rata() >= 78 && $this->rata_rata()  <=100 ){
                    $ket = "Lulus";
                }
                else {
                    $ket = "Remedial";
                }
                return $ket;
            }
        }


        $raport = new NilaiRaport($nama , $kelas , $nis , $mapel , $nh , $nuts , $nuas , $absen ); ?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            </head>
            <body">
                <br><br>
                <div class="container-fluid">
                    
                    <div class="row justify-content-center">

                        <div class="col-md-5">
                            <table class="table table-bordered rounded table-hover center " > 
                                <thead>
                                    <tr class="table-success">
                                        <th class="text-center" colspan="4">Data Siswa</th>
                                    </tr>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-secondary" >
                                        <td>Nama</td>
                                        <td><?= $raport->nama ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Kelas</td>
                                        <td><?= $raport->kelas ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>NIS</td>
                                        <td><?= $raport->nis ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Mapel</td>
                                        <td><?= $raport->mapel ?> </td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>

                        <div class="col-md-5">
                            <table class="table table-bordered rounded table-hover center " > 
                                <thead>
                                    <tr class="table-success">
                                        <th class="text-center" colspan="4">Nilai Siswa</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr class="table-secondary" >
                                        <td>Nilai Harian 45%</td>
                                        <td><?= $raport->nh ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Nilai UTS 20%</td>
                                        <td><?= $raport->nuts ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Nilai UAS 20%</td>
                                        <td><?= $raport->nuas?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Nilai Absen 15%</td>
                                        <td><?= $raport->absen ?> </td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <table class="table table-bordered center ">
                                <tr class="table-primary">
                                    <th>Rata - Rata</th>
                                    <th><?= $raport->rata_rata() ?></th>
                                </tr>
                                <tr class="table-primary">
                                    <th>Grade</th>
                                    <th><?=$raport->grade()?></th>
                                </tr>
                                <tr class="table-primary">
                                    <th>Status</td>
                                    <th><?=$raport->status()?></th>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </body>
            </html>
    <?php    
    }
    ?>

    <!-- akhir isi -->
</body>
</html>