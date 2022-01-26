<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Liburan</title>
</head>

<body>
    
    <h2><center>PILIHAN LIBURAN</center></h2>
    
    <table>

    <tr>
        <td>Bukit Bintang</td>
        <td> : </td>
        <td>Rp. 10.000</td>
    </tr>

    <tr>
        <td>Pantai Sandranan</td>
        <td> : </td>
        <td>Rp. 15.000</td>
    </tr>
    
    <tr>
        <td>Candi Borobudur</td>
        <td> : </td>
        <td>Rp. 50.000</td>
    </tr>

    <tr>
        <td>Candi Prambanan</td>
        <td> : </td>
        <td>Rp. 50.000</td>
    </tr>

    <tr>
        <td>Keraton Yogyakarta</td>
        <td> : </td>
        <td>Rp. 5000</td>
    </tr>

    <tr>
        <td>Malioboro</td>
        <td> : </td>
        <td>Rp. 5000</td>
    </tr>

    <tr>
        <td>Pendopo Lawas</td>
        <td> > </td>
        <td>Cafe</td>
    </tr>

    <tr>
        <td>Goa Pindol</td>
        <td> : </td>
        <td>Rp. 100.000</td>
    </tr>

    </table>

    <form action = "proses.php" method = "POST">
        <p>
            <label for = "pilih">Pilih Destinasi :</label>
            <select name="pilih">
                <option selected hidden ></option>
                <option value = "Bukit Bintang">Bukit Bintang</option>
                <option value = "Pantai Sandranan">Pantai Sandranan</option>
                <option value = "Candi Borobudur">Candi Borobudur</option>
                <option value = "Candi Prambanan">Candi Prambanan</option>
                <option value = "Keraton Yogyakarta">Keraton Yogyakarta</option>
                <option value = "Malioboro">Malioboro</option>
                <option value = "Pendopo Lawas">Pendopo Lawas(Cafe)</option>
                <option value = "Goa Pindol">Goa Pindol</option>
            </select>
            <input type = "submit" name = "kirim" value = "Kirim">
        </p>
    </form>

</body>

</html>