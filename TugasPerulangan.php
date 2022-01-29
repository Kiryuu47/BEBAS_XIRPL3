<?php

//Perulangan While

$a = 0;

while($a <= 3) {
    
    echo "<h3>Perulangan While ke $a</h3>";
    $a++;
}

echo "<br>";

$b = 1;

while($b <= 5) {

    echo "<p>While ke $b</p>";
    $b++;
}

echo "<br>";

$jumlah = 0;
$c = 1;

while($c <= 10) {
    $c ++;
    $jumlah = $jumlah + $c;

}

echo "Hasilnya : ".$jumlah;

echo "<br>";
echo "<br>";

//Perulangan Do While

$d = 5;

do {

    echo "<h3>Perulangan Do While ke $d</h3>";
    $d--;
} while($d > 0);

echo "<br>";

$i=1;
do{

  echo "$i";
  echo "<br />";
  $i = $i + 1;
} while ($i <= 10);

echo "<br>";

$z = 1;
do {
    echo "Do While: $z <br>";
    $z++;
} while($z <= 5);

?>