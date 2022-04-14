<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Akhir CSS -->

    <!-- icons -->
    <link rel="stylesheet" href="npm i bootstrap-icons" />
    <!-- akhir icons -->

</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #011b64">
        <div class="container-fluid">
            <h3 class="navbar-brand ms-2" style="color:rgb(255, 230, 0);">Latihan</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link" aria-current="page" href="#latihansabtu.html">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->
    <br><br><br><br><br><br>
    <!-- isi -->
    <form action="hasillatihansabtu.php" method="post">
        <div class="container-fluid">
            <div class="card pb-5">

                <table class="table" style="color: #0447ff;">
                    <tr>
                        <td> <b> Data Penggajian </b> </td>
                    </tr>
                </table>

                <!-- row -->
                <div class="row justify-content-center">

                    <!-- col 1 -->
                    <div class="col-md-4">

                        <!-- Judul -->
                        <center class="mb-5">
                            <h1>Gaji</h1>
                        </center>
                        <!-- >> Judul -->

                        <div class="mb-3">
                            <label class="form-label">Nama Karyawan</label>
                            <input type="name" required name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <select required name="jabatan" class="form-control">
                                <option class="text-center" value=""> - - - Pilih Jabatan - - - </option>
                                <option value="direktur">Direktur</option>
                                <option value="manager">Manager</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="OB">OB</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Kerja</label>
                            <select required name="status_kerja" class="form-control">
                                <option class="text-center" value=""> - - - Pilih Status Kerja - - - </option>
                                <option value="tetap">Tetap</option>
                                <option value="kontrak">Kontrak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lama Kerja</label>
                            <input required type="number" name="lama_kerja" class="form-control">
                        </div>
                    </div>
                    <!-- >> col 1 -->

                    <!-- col 2 -->
                    <div class="col-md-4">

                        <center class="mb-5">
                            <h1>Potongan</h1>
                        </center>

                        <div class="mb-3">
                            <label class="form-label">Pinjaman</label>
                            <input required type="number" name="pinjaman" class="form-control" ">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Tabungan</label>
                            <input required type="number" name="tabungan" class="form-control">
                        </div>
                    </div>
                    <!-- >> col 2 -->
                </div>
                <!-- >> row -->
                <center><button type="submit" name="kirim" value="KIRIM" class="btn btn-outline-info">KIRIM</button>
                </center>
            </div>
        </div>
    </form>

    <!-- akhir isi -->

    <br><br><br><br><br>
    <!-- footer -->
    <footer style=" background-color: #011b64"" class=" p-4">
        <p style="color: #ffff" class="text-center">
            Created with
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill"
                style="color: red" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg>

            <a style="color: #ffff" class="fw-bold" href=""></a>
            <i class="text-end">&#169; copyright 2022 </i>
        </p>
    </footer>
    <!-- akhir footer -->
</body>

</html>