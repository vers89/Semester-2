<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan4 latihan3</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>
                Latihan 2
            </legend>
            <table>
                <tr>
                    <th>Jenis Makhluk</th>
                    <td> : </td>
                    <td>
                        <select name="jenis" id="">
                            <option value=""> --- Pilih Jenis Makhluk ---</option>
                            <option value="Manusia">Manusia</option>
                            <option value="Jin">Jin</option>
                            <option value="Malaikat">Malaikat</option>
                            <option value="Setan">Setan</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><button type="submit" name="kirim">KIRIM</button><button type="reset" name="kir">RESET</button></th>
                </tr>

            </table>
            <?php
            if(isset($_POST['kirim'])){
                $jenis = $_POST['jenis'];


                class Makhluk{
                    public $jenis_makhluk;

                    public function __construct($jenis_makhluk){
                        $this->jenis_makhluk = $jenis_makhluk;
                    }

                }

                class Sifat extends Makhluk {

                    public function sifatt(){
                        if ($this->jenis_makhluk == "Manusia") {
                            return "Ada yang taat beribadah dan ada juga yang sesat";
                        }
                        elseif ($this->jenis_makhluk == "Jin") {
                            return "Ada yang taat beribadah dan ada juga yang sesat";
                        }
                        elseif ($this->jenis_makhluk == "Malaikat") {
                            return "Beribadah kepada tuhan";
                        }
                        elseif ($this->jenis_makhluk == "Setan") {
                            return "Mengganggu manusia agar tidak beribadah";
                        }
                    }
                }
            }

            $makhluk = new Sifat($jenis);
            echo "Jenis Makhluk : {$makhluk->jenis_makhluk} <br>";
            echo $makhluk->sifatt();
            ?>
        </fieldset>
    </form>
</body>
</html>