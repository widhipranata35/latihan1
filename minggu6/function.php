<?php

//pembuatan fungsi
function perkalian($angka1, $angka2)
{
   $a = $angka1;
   $b = $angka2;
   $hasil = $a * $b;
   return $hasil;
}

//pemanggilan fungsi
$hasil = perkalian(20, 3);
echo "Perkalian 20 x 3 adalah $hasil";
echo "<br>";
echo "Perkalian 9 x 2 adalah " . perkalian(9, 2);

?>