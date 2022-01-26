<?php

if(isset($_POST["pilih"])) {
    $destinasi = $_POST["pilih"];
    $harga_tiket;
    $diskon;

    if($destinasi == "Bukit Bintang") {
        $harga_tiket = 10000;
        echo "<center><h2>Anda Memilih Destinasi Ke Bukit Bintang</h2></center>";

    }else if($destinasi == "Pantai Sandranan") {
        $harga_tiket = 15000;
        echo "<center><h2>Anda Memilih Destinasi Ke Pantai Sandranan</h2></center>";

    }else if($destinasi == "Candi Borobudur") {
        $harga_tiket = 50000;
        echo "<center><h2>Anda Memilih Destinasi Ke Candi Borobudur</h2></center>";

    }else if($destinasi == "Candi Prambanan") {
        $harga_tiket = 50000;
        echo "<center><h2>Anda Memilih Destinasi Ke Candi Prambanan</h2></center>";

    }else if($destinasi == "Keraton Yogyakarta") {
        $harga_tiket = 5000;
        echo "<center><h2>Anda Memilih Destinasi Ke Keraton Yogyakarta</h2></center>";

    }else if($destinasi == "Malioboro") {
        $harga_tiket = 5000;
        echo "<center><h2>Anda Memilih Destinasi Ke Malioboro</h2></center>";

    }else if($destinasi == "Pendopo Lawas") {

    }else if($destinasi == "Goa Pindol") {
        $harga_tiket = 100000;
        echo "<center><h2>Anda Memilih Destinasi Ke Goa Pindol</h2></center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($destinasi == 'Pendopo Lawas') : ?>
    <title>Cafe Pendopo Lawas</title>
    <?php else : ?>
        <title>Destinasi</title>
        <?php endif ?>
</head>
<body>
    <?php if($destinasi === "Pendopo Lawas") : ?>

        <center>

        <h2>Cafe Pendopo Lawas</h2>

        <div>

            <h3><u>Menu</u></h3>

            <table border = "1" cellpadding = "10px">

                <tr>
                    <th>No</th>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>No</th>
                    <th>Minuman</th>
                    <th>Harga</th>
                </tr>

                <tr>
                    <th>1</th>
                    <th>Seblak Kaori</th>
                    <th>Rp. 10.000</th>
                    <th>1</th>
                    <th>Teh Manis</th>
                    <th>Rp. 5.000</th>
                </tr>

                <tr>
                    <th>2</th>
                    <th>Mie Instan</th>
                    <th>Rp. 8.000</th>
                    <th>2</th>
                    <th>Lemon Tea</th>
                    <th>Rp. 5.000</th>
                </tr>

                <tr>
                    <th>3</th>
                    <th>Burger</th>
                    <th>Rp. 15.000</th>
                    <th>3</th>
                    <th>MilkShake</th>
                    <th>Rp. 7.000</th>
                </tr>

                <tr>
                    <th>4</th>
                    <th>Nasi Goreng</th>
                    <th>Rp. 15.000</th>
                    <th>4</th>
                    <th>Es Jeruk</th>
                    <th>Rp. 5000</th>
                </tr>

                <tr>
                    <th>5</th>
                    <th>Toppoki</th>
                    <th>Rp. 20.000</th>
                    <th>5</th>
                    <th>Es Kelapa</th>
                    <th>Rp. 7.000</th>
                </tr>

            </table>

        </div>

        <br>

        <div>

        <h2>Info Pemesanan</h2>

        <form action="Pembayaran.php" method = "POST">

        <table>

            <tr>
                <td>Pilih Makanan</td>
                <td> : </td>
                <td>
                    <select name = "makanan">
                        <option selected hidden></option>
                        <option value = "Seblak Kaori">Seblak Kaori</option>
                        <option value = "Mie Instan">Mie Instan</option>
                        <option value = "Burger">Burger</option>
                        <option value = "Nasi Goreng">Nasi Goreng</option>
                        <option value = "Toppoki">Toppoki</option>
                    </select>
                </td>
                <tr>
                    <td>Pesan Berapa</td>
                    <td> : </td>
                    <td><input type = "number"  name = "bma"></td>
                </tr>

                <tr>
                <td>Pilih Minuman</td>
                <td> : </td>
                <td>
                    <select name = "minuman">
                        <option selected hidden></option>
                        <option value = "Teh Manis">Teh Manis</option>
                        <option value = "Lemon Tea">Lemon Tea</option>
                        <option value = "MilkShake">MilkShake</option>
                        <option value = "Es Jeruk">Es Jeruk</option>
                        <option value = "Es Kelapa">Es Kelapa</option>
                    </select>
                </td>
                <tr>
                    <td>Pesan Berapa</td>
                    <td> : </td>
                    <td><input type = "number" name = "bmi"></td>
                </tr>
                <td>
                    <input type = "submit" name = "kirim" value = "Kirim">
                </td>
            </tr>

        </table>

        </form>

        </div>

    </center>

    <?php else : ?>

        <h2>Informasi Pembelian</h2>
        <table>
        <tr>
            <tr>
                <td>Destinasi yang dipilih</td>
                <td> : </td>
                <td><?=$destinasi?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td> : </td>
                <td><?=$harga_tiket ?> /Orang</td>
            </tr>

        </tr>

        </table>

        <br>

        <form action="Pembayaran.php">

            <input type = "number" name = "jumlah" id = "jumlah">
            <input type = "hidden" name = "hargatiket" value = "<?=$harga_tiket?>">
            <input type = "hidden" name = "destinasi" value = "<?=$destinasi?>">
            <input type = "hidden" name = "tipe" value = "Tiket">
            <button type = "submit" name = "beli">Beli</button>

        </form>

        <?php endif?>

</body>

</html>