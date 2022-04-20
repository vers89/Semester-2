<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas akhir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body style="color: rgb(0, 0, 0); background: #a8dbff;" class="" id="tubuh">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #011b64 ">
        <div class="container-fluid">
            <h3 class="navbar-brand ms-2" style="color:rgb(255, 230, 0);">Tugas Akhir</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link" aria-current="page" href="#tubuh">Home</a>
                </div>
            </div>
            
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- isi -->
    <form action="hasil.php" method="post" class="pt-2">
        <div class="container-fluid mt-3 pt-5" >
            <div class="card pb-5 bg-info">

                <table class="table bg-primary" style="color: aliceblue;">
                    <tr>
                        <td> <b> <h5 style="color: yellow;">Data Nilai</h5> </b> </td>
                    </tr>
                </table>

                <!-- row -->
                <div class="row justify-content-center ">

                    <!-- col 1 -->
                    <div class="col-md-4">

                        <!-- Judul -->
                        <center class="mb-4">
                            <h5  class="rounded" ><b> Nilai Ujian Sekolah <br> SMK ASSALAAM BANDUNG</b></h5> 
                        </center>
                        <!-- >> Judul -->

                          <center><img class="mb-5" src="./gambar/1650437780982.png" alt="eror404" height="160" width="260"></center>  

                        <div class="mb-3 ">
                            <label class="form-label">NIS</label>
                            <input required placeholder="Masukkan NIS siswa" type="number" name="nis" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label">Nama Siswa </label>
                            <input required placeholder="Masukkan nama siswa" type="text" name="nama" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <select required class="form-select" name="jurusan" aria-label="Default select example">
                                <option selected hidden> Pilih Jurusan </option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                <option value="Teknik dan Bisnis Sepeda Motor">Teknik Berbisnis Sepeda Motor</option>
                            </select>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label class="form-label">Kelas : </label>
                            </div>
                        
                            <div class="col-md-3 ">
                            
                                <select required class="form-select mb-1 " name="kelas" aria-label="Default select example">
                                    <option value="X">X</option>
                                    <option value="XI">XI </option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>    

                            <div class="col-md-3">
                                <select required class="form-select mb-1" name="jurusan2" aria-label="Default select example">
                                    <option value="RPL"> RPL </option>
                                    <option value="TKRO"> TKRO</option>
                                    <option value="TBSM"> TBSM </option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <select required class="form-select mb-1" name="berapa" aria-label="Default select example">
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <!-- >> col 1 -->

                </div>
                <!-- >> row -->

                <center>
                <div class="row justify-content-center pt-5">
                    <div class="col-md-7"><h3><u>Nilai Ujian Sekolah</u></h3></div>
                </div>
                </center>

                <!-- row 2 -->

                <div class="row justify-content-center pt-5">

                    <!-- col 1 -->
                    <div class="col-md-2 me-5">

                        <!-- Judul -->
                        <center class="mb-2 ">
                            <h6 class="rounded" > <i> Bahasa Indonesia </i></h6> 
                        </center>
                        <!-- >> Judul -->


                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Kehadiran" type="number" name="hadir1" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Tugas" type="number" name="tugas1" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Absen" type="number" name="absen1" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Ujian" type="number" name="ujian1" class="form-control">
                        </div>

                        
                    </div>
                    <!-- >> col 1 -->


                    <!-- col 2  -->
                    <div class="col-md-2 me-5">

                        <!-- Judul -->
                        <center class="mb-2">
                            <h6 class="rounded" > <i> Bahasa Inggris </i></h6>  
                        </center>
                        <!-- >> Judul -->


                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Kehadiran" type="number" name="hadir2" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Tugas" type="number" name="tugas2" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Absen" type="number" name="absen2" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Ujian" type="number" name="ujian2" class="form-control">
                        </div>
                        
                    </div>
                    <!-- >> col 2 -->


                    <!-- col 3 -->
                    <div class="col-md-2 me-5">

                        <!-- Judul -->
                        <center class="mb-2">
                            <h6 class="rounded" > <i> Matematika </i></h6> 
                        </center>
                        <!-- >> Judul -->


                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Kehadiran" type="number" name="hadir3" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Tugas" type="number" name="tugas3" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Absen" type="number" name="absen3" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Ujian" type="number" name="ujian3" class="form-control">
                        </div>
                        
                    </div>
                    <!-- >> col 3 -->


                    <!-- col 4 -->
                    <div class="col-md-2 me-5">

                        <!-- Judul -->
                        <center class="mb-2">
                            <h6 class="rounded" > <i> Produktif </i></h6>  
                        </center>
                        <!-- >> Judul -->

                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Kehadiran" type="number" name="hadir4" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Tugas" type="number" name="tugas4" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Absen" type="number" name="absen4" class="form-control">
                        </div>
                        <div class="mb-1  ">
                            <label class="form-label"></label>
                            <input required placeholder="Nilai Ujian" type="number" name="ujian4" class="form-control">
                        </div>
                    </div>    
                    <!-- >> col 4 -->

                </div>
                <!-- >> row 3 -->
                <center>
                    <div class="btn-group mt-4 pt-5" role="group" aria-label="Basic mixed styles example">
                        <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                        <button type="button" class="btn btn-danger">RESET </button>
                    </div>
                </center>
            </div>
           
        </div>
    </form>  
    <!-- footer -->
    <footer style=" background-color: #011b64"" class=" p-4 mt-3">
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
    </footer>
    <!-- akhir footer -->
</body>
</html>
    

    <!-- akhir isi -->
