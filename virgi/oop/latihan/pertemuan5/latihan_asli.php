<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 OOP (Soal Asli)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body style="color: aliceblue; background: rgba(3, 172, 163, 0.74);" >
    <!-- isi -->
    <form action="" method="post">
        <div class="container-fluid mt-3" >
            <div class="card pb-5 bg-warning">

                <table class="table " style="color: rgb(0, 0, 0);">
                    <tr>
                        <h5><th style="color: rgb(0, 0, 0);"> Data Pembelian  </th> </h5>
                    </tr>
                </table>

                <!-- row -->
                <div class="row justify-content-center ">

                    <!-- col 1 -->

                    <!-- >> col 1 -->

                    <!-- col 2 -->
                    <div class="col-md-4 ms-4">

                        <!-- Judul -->
                        <center class="mb-6">
                            <h1 class="rounded" style="background-color: rgb(24, 202, 0); color: antiquewhite;" >Pembelian</h1>
                        </center>
                        <!-- >> Judul -->

                        <div class="mb-3">
                            <label class="form-label">Nama Barang </label>
                            <input required placeholder="Masukkan jumlah pesanan" required type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Barang </label>
                            <input required placeholder="Masukkan jumlah pesanan" required type="number" name="harga" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Pesanan </label>
                            <input required placeholder="Masukkan jumlah pesanan" required type="number" name="pesanan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Metode Pembayaran </label>
                            <select class="form-select" required name="metode" required >
                                <option value="" hidden>Pilih metode pembayaran</option>
                                <option value="Cash">Cash</option>
                                <option value="M-Banking">M-baking</option>
                                <option value="Gopay">Gopay</option>
                                <option value="pickUp">pickUp</option>
                            </select>
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
        $harga = $_POST['harga'];
        $jumlah = $_POST['pesanan'];
        $metode = $_POST['metode'];

        require_once "./produk_asli.php";

        $produk1 = new Produk($nama, $harga, $jumlah , $metode ); ?>
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
                                        <th class="text-center" colspan="4">Info Barang</th>
                                    </tr>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-secondary" >
                                        <td>Nama Barang</td>
                                        <td><?= $produk1->nama ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Harga</td>
                                        <td><?= "Rp " . number_format($produk1->harga,0,".",".") ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Jumlah Pesanan</td>
                                        <td><?= $produk1->jumlah ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Sistem Pembayaran</td>
                                        <td><?= $produk1->metode ?> </td>
                                    </tr>

                                </tbody>    
                            </table>
                        </div>
                        
                        <div class="col-md-5">
                            <table class="table table-bordered rounded table-hover center " > 
                                <thead>
                                    <tr class="table-success">
                                        <th class="text-center" colspan="4">Struk Belanja</th>
                                    </tr>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-secondary" >
                                        <td><?= $produk1->nama ?></td>
                                        <td><?= $produk1->jumlah ?> </td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Total Harga</td>
                                        <td><?= "Rp " . number_format($produk1->hasil(),0,".",".") ?> </td>
                                    </tr>

                                    <tr class="table-secondary">
                                        <td>Diskon <?= $produk1->discountPersen() ?></td>
                                        <td><?= "Rp " . number_format($produk1->discount(),0,".",".",) ?> </td>
                                    </tr>

                                    <tr class="table-secondary">
                                        <td>Cashback <?= $produk1->cashbackPersen()?> </td>
                                        <td><?= "Rp " . number_format($produk1->cashback(),0,".",".")  ?> </td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th>Jumlah yang harus dibayar</td>
                                        <th><?="Rp " . number_format($produk1->jumlahDibayar(),0,".",".",) ?> </td>
                                    </tr>
                                </tbody>    
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