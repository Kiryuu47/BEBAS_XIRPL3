<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 2</title>
</head>
<body>

<center>

<h3>Soal No 2 (2)</h3>

    <form action="" method = "POST">
        <label for="Angka">Input Bilangan : </label>
        <input type="number" name = "Nomor" Value = "Angka">
        <input type="submit" name = "Kirim" Value = "Kirim">
    </form>

    </center>

    <br>
    
</body>
</html>

<?php

echo"<center>";

if (isset($_POST['Kirim'])) {
    $angka = $_POST['Nomor'];


	for($a = $angka; $a >= 1; $a--){
        for($b = 1; $b <= $a; $b++){
		echo "$b  ";
	}
	echo "<br>";
	}

}
echo"</center>";


?>