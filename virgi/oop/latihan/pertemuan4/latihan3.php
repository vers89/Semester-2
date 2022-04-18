<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan4 latihan3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body style="color: aliceblue; background: rgb(164, 244, 255);" >
    <!-- isi -->
    <form action="" method="post">
        <div class="container-fluid mt-3 mb-3" >
            <div class="card pb-5 bg-info ">

                <table class="table bg-primary" style="color: aliceblue;">
                    <tr>
                        <td> <b> <h5 style="color: yellow; " > &nbsp; Titan</h5> </b> </td>
                    </tr>
                </table>

                <!-- row -->
                <div class="row justify-content-center ">

                    <!-- col 1 -->
                    <div class="col-md-4">

                        <!-- Judul -->
                        <center class="mb-4">
                            <h1 class="bg-warning rounded" >Level Point</h1>
                        </center>
                        <!-- >> Judul -->

                        <div class="mb-3">
                            <label class="form-label">Level Point </label>
                            <input required placeholder="Masukkan level point" required type="number" name="level" class="form-control">
                        </div>
                        
                    </div>
                    <!-- >> col 1 -->

                </div>
                <!-- >> row -->
                <center>
                    <div class="btn-group mt-4" role="group" aria-label="Basic mixed styles example">
                        <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                        <button type="button" class="btn btn-danger">RESET </button>
                    </div>
                </center>
                <?php
                if(isset($_POST['kirim'])){
                    $level = $_POST['level'];

                    class Titan {

                        public $level;

                        public function __construct($level){
                            $this->level = $level;
                        }
                    }

                    class Human extends Titan{
                        public function killAlltitan(){
                            $ket = "Sasageyo... Shinzo Sasageyo...";
                            return $ket;
                        }
                    }
                    class beastTitan extends Titan{
                        public function lempar(){
                            $ket = "Wush wush...";
                            return $ket;
                        }
                        
                    }
                    class attackTitan extends Titan{
                        public function punch(){
                            $ket = "Blamm blam...";
                            return $ket;
                        }
                    }
                    class armorTitan extends Titan{
                        public function terjang(){
                            $ket = "Dushh... dush...";
                            return $ket;
                        }
                    }

                    ?>

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

                    <?php $human = new Human($level); ?>
                    <?php $beast = new beastTitan($level); ?>
                    <?php $attack = new attackTitan($level); ?>
                    <?php $armor = new armorTitan($level); ?>
                        
                        <div class="container-fluid mt-4">

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <table class="table table-bordered center table-hover ">

                                        <thead>
                                            <tr class="table-primary">
                                                <th class="text-center" colspan="2">Human</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="table-success">
                                                <td>Level Point Human</td>
                                                <td class="text-center"><?= $human->level?></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Sifat dari Human</td>
                                                <td class="text-center"><?=$human->killAlltitan()?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid mt-4">

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <table class="table table-bordered center table-hover ">

                                        <thead>
                                            <tr class="table-primary">
                                                <th class="text-center" colspan="2">Beast Titan</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="table-success">
                                                <td>Level Point Beast Titan</td>
                                                <td class="text-center"><?= $beast->level?></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Sifat dari Beast Titan</td>
                                                <td class="text-center"><?=$beast->lempar()?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid mt-4">

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <table class="table table-bordered center table-hover ">

                                        <thead>
                                            <tr class="table-primary">
                                                <th class="text-center" colspan="2">Attack Titan</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="table-success">
                                                <td>Level Point Attack Titan</td>
                                                <td class="text-center"><?= $attack->level?></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Sifat dari Attack Titan</td>
                                                <td class="text-center"><?=$attack->punch()?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid mt-4">

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <table class="table table-bordered center table-hover">

                                        <thead>
                                            <tr class="table-primary">
                                                <th class="text-center" colspan="2">Armor Titan</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="table-success">
                                                <td>Level Point Armor Titan</td>
                                                <td class="text-center"><?= $armor->level?></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Sifat dari Armor Titan</td>
                                                <td class="text-center"><?=$armor->terjang()?></td>
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
            </div>
        </div>
    </form>
</body>
</html>