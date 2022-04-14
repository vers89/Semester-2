<?php

if(isset($_POST["kirim"])){
$nama = $_POST['username'];
$pass = $_POST['password'];

}

if($nama == "admin" && $pass == 12345){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Alert</title>
    <?php   
    function alertWindow($msg) {       
        echo "<script type ='text/JavaScript'>";  
        echo "alert('$msg')";  
        echo "</script>";   
    }
    
    alertWindow("Selamat Anda Berhasil Login ");   
    ?>
</head>

<body>
</body>

</html>
<?php
}

else {
    function alertWindow($msg) {       
        echo "<script type ='text/JavaScript'>";  
        echo "alert('$msg')";  
        echo "</script>";   
    }
    
    alertWindow("ERROR ");  
}
?>