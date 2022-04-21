<?php

    if (isset($_POST['kirim'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $kelas = $_POST['kelas'];
        $jurusan2 = $_POST['jurusan2'];
        $berapa = $_POST['berapa'];
        
        $hadir1 = $_POST['hadir1'];
        $tugas1 = $_POST['tugas1'];
        $absen1 = $_POST['absen1'];
        $ujian1 = $_POST['ujian1'];
        
        $hadir2 = $_POST['hadir2'];
        $tugas2 = $_POST['tugas2'];
        $absen2 = $_POST['absen2'];
        $ujian2 = $_POST['ujian2'];
        
        $hadir3 = $_POST['hadir3'];
        $tugas3 = $_POST['tugas3'];
        $absen3 = $_POST['absen3'];
        $ujian3 = $_POST['ujian3'];
        
        $hadir4 = $_POST['hadir4'];
        $tugas4 = $_POST['tugas4'];
        $absen4 = $_POST['absen4'];
        $ujian4 = $_POST['ujian4'];

        require_once ("./class.php");
        ?>

        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Hasil</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            </head>
            <body style="background: #a2d9ff; " id="tubuuh">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #011b64 ">
                <div class="container-fluid">
                    <h3 class="navbar-brand ms-2" style="color:rgb(255, 230, 0);">Tugas Akhir</h3>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-4">
                            <a class="nav-link" aria-current="page" href="#tubuuh">Hasil</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- akhir navbar -->
                <br><br><br>
                <center><h1><b>Nilai Ujian Sekolah</b></h1></center>
            <div class="container-fluid">
                <div class="card pb-4 bg-info"> 

                    <div class="container-fluid pt-4" >
                        <center>
                            <table class="table " >
                                <tr>
                                    <th>
                                        <h5>
                                            Form Nilai
                                        </h5>
                                    </th>
                                </tr>
                            </table>
                        </center>

                        <div class="row justify-content-center">
                            <div class="col-md-3 ">
                                <center class="mb-4">
                                    <h2 class="bg-success rounded pb-1 pt-1" style="color: bisque;">Data Siswa</h2>
                                </center>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            

                            <div class="col-md-7">
                                
                                
                                <table class="table table-hover center " > 
                                    <thead>
                                        <tr class="table-success">
                                            <th class="text-center" colspan="4">Data Siswa</th>
                                        </tr>
                                        
                                        </tr>
                                    </thead>

                                    <?php $data = new Data( $nis, $nama , $jurusan , $kelas , $jurusan2 , $berapa ); ?>

                                    <tbody>
                                        <tr class="table-secondary" >
                                            <td>Nis</td>
                                            <td> : </td>
                                            <td><?= $data->nis?> </td>
                                        </tr>
                                        <tr class="table-secondary" >
                                            <td>Nama</td>
                                            <td> : </td>
                                            <td><?= $data->nama ?> </td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td>Jurusan</td>
                                            <td> : </td>
                                            <td><?= $data->jurusan ?> </td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td>Kelas </td>
                                            <td> : </td>
                                            <td><?= $data->getKelas()?> </td>
                                        </tr>
                                    </tbody>    
                                </table>
                            </div>
                        </div>

                        <div class="row justify-content-center pt-5">
                            <div class="col-md-3 ">
                                <center class="mb-4">
                                    <h2 class="bg-success rounded pb-1 pt-1" style="color: bisque;">Nilai Siswa</h2>
                                </center>
                            </div>
                        </div>

                        <div class="row justify-content-center ">
                            <div class="col-md-7">
                                <table class="table table-bordered rounded table-hover " > 
                                    <thead>
                                        <tr class="table-success">
                                            <th></th>
                                            <th>Bahasa Indonesia</th>
                                            <th>Bahasa Inggris</th>
                                            <th>Matematika</th>
                                            <th>Produktif</th>
                                        </tr>
                                    </thead>

                                    <?php $indonesia = new Indonesia( $hadir1, $tugas1 , $absen1 , $ujian1); ?>
                                    <?php $inggris = new Inggris( $hadir2, $tugas2 , $absen2 , $ujian2 ); ?>
                                    <?php $matematika = new Matematika( $hadir3, $tugas3 , $absen3 , $ujian3 ); ?>
                                    <?php $produktif = new Produktif( $hadir4, $tugas4 , $absen4 , $ujian4 ); ?>

                                    <tbody>
                                        <tr class="table-secondary " >
                                            <td>Nilai Kehadiran</td>
                                            <td class="text-center" > <?= $hadir1 ?></td>
                                            <td class="text-center" > <?= $hadir2 ?></td>
                                            <td class="text-center" > <?= $hadir3 ?></td>
                                            <td class="text-center" > <?= $hadir4 ?></td>
                                        </tr>
                                        <tr class="table-secondary" >
                                            <td>Nilai Tugas</td>
                                            <td class="text-center" > <?= $tugas1 ?></td>
                                            <td class="text-center" > <?= $tugas2 ?></td>
                                            <td class="text-center" > <?= $tugas3 ?></td>
                                            <td class="text-center" > <?= $tugas4 ?></td>
                                        </tr>
                                        <tr class="table-secondary" >
                                            <td>Nilai Absen</td>
                                            <td class="text-center" > <?= $absen1 ?></td>
                                            <td class="text-center" > <?= $absen2 ?></td>
                                            <td class="text-center" > <?= $absen3 ?></td>
                                            <td class="text-center" > <?= $absen4 ?></td>
                                        </tr>
                                        <tr class="table-secondary" >
                                            <td>Nilai Ujian</td>
                                            <td class="text-center" > <?= $ujian1 ?></td>
                                            <td class="text-center" > <?= $ujian2 ?></td>
                                            <td class="text-center" > <?= $ujian3 ?></td>
                                            <td class="text-center" > <?= $ujian4 ?></td>
                                        </tr>
                                    </tbody>   
                                    <thead>
                                        <tr class="table-danger text-center" >
                                            <th>Nilai Akhir</th>
                                            <th> <?= $indonesia->hitung() ?></th>
                                            <th> <?= $inggris->hitung() ?></th>
                                            <th> <?= $matematika->hitung() ?></th>
                                            <th> <?= $produktif->hitung() ?></th>
                                        </tr>
                                    </thead> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <footer style=" background-color: #011b64"" class=" p-4 mt-3">
                <div class="row justify-content-start">
                    <div class="col-md-4">
                        <a href="form.php"><button type="submit" name="kirim" class="btn btn-danger">Kembali</button></a>
                    </div>

                    <div class="col-md-4">
                        <p style="color: #ffff" class="text-center">
                            Created with
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill"
                                style="color: red" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                            </svg>
                            By 
                            <a style="color: #ffff" class="fw-bold" href="https://m.facebook.com/campaign/landing.php?&campaign_id=1661741489&extra_1=s%7Cm%7C513502597352%7Ce%7Cfacebook%7C&placement&creative=513502597352&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1661741489%26adgroupid%3D65609010858%26matchtype%3De%26network%3Dg%26source%3Dmobile%26search_or_content%3Ds%26device%3Dm%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1007700%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjw3v6SBhCsARIsACyrR
                            Ak-HnhwmLy_osoblhhtJX2rZtMjcTnOU90oYmS2Kqp9VLA44C2hb6waAuVGEALw_wcB">Virgi</a>
                            <i class="text-end">&#169; copyright 2022 </i>
                        </p>
                    </div>
                </div>
                
            </footer>

            </body>
            </html>
    <?php    
    }
    ?>