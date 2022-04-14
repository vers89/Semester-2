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
<body>
    <fieldset>
        <legend><h2><center>OOP Aritmatika</center></h2></legend>
        <center>
        <form action="" method="POST">
            <table>
                <tr>
                    <th>Bilangan 1 </th>
                    <td><input type="number" name="bil1" required></td>
                </tr>
                <tr>
                    <th>Bilangan 2 </th>
                    <td><input type="number" name="bil2" required></td>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                            <button type="button" class="btn btn-danger">RESET </button>
                        </div>
                    </th>
                </tr>    
            </table>
        </form>
        </center>

        <?php
        if(isset($_POST['kirim'])){
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];

            class Aritmatika 
            {
                public $bil1;
                public $bil2;

                public function __construct($a , $b){
                    $this->bil1 = $a;
                    $this->bil2 = $b;
                }
                
                public function penjumlahan(){
                    return $this->bil1 + $this->bil2;
                }
                public function pengurangan(){
                    return $this->bil1 - $this->bil2;
                }
                public function perkalian(){
                    return $this->bil1 * $this->bil2;
                }
                public function pembagian(){
                    return $this->bil1 / $this->bil2;
                }
                public function modulus(){
                    return $this->bil1 % $this->bil2;
                }

            }

            $aritmatika = new Aritmatika($bil1 , $bil2); ?>
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
            <body>
                <br><br>
                <div class="container-fluid">
                    <table class="table table-bordered table-striped table-hover center " > 
                        
                        <thead>
                            <tr class="table-success">
                                <th scope="col">#</th>
                                <th scope="col">Penjumlahan</th>
                                <th scope="col">Pengurangan</th>
                                <th scope="col">Perkalian</th>
                                <th scope="col">Pembagian</th>
                                <th scope="col">Modulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-success" ">
                                <th scope="row">1</th>
                                <td><?= " $bil1 + $bil2 = " . $aritmatika->penjumlahan();?></td>
                                <td><?= " $bil1 - $bil2 = " . $aritmatika->pengurangan();?></td>
                                <td><?= " $bil1 * $bil2 = " . $aritmatika->perkalian();?></td>
                                <td><?= " $bil1 / $bil2 = " . $aritmatika->pembagian();?></td>
                                <td><?= " $bil1 % $bil2 = " . $aritmatika->modulus();?></td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
            </body>
            </html>
        <?php    
        }
        ?>

    </fieldset>
</body>
</html>