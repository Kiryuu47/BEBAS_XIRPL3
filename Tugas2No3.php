<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 2</title>
</head>
<body>

<h3>Soal No 2 (3)</h3>

    <form action="" method = "POST">
        <label for="Angka">Input Bilangan : </label>
        <input type="number" name = "Nomor" Value = "Angka">
        <input type="submit" name = "Kirim" Value = "Kirim">
    </form>

    <br>
    
</body>
</html>

<?php

if(isset($_POST["Kirim"])) {
    $nomor = $_POST["Nomor"];


    for($i = $nomor; $i >= 1; $i--) {
        for($j = $nomor; $j >= $i; $j--) {
            echo "$j  ";
        }
        echo "<br>";
    }
}

?>