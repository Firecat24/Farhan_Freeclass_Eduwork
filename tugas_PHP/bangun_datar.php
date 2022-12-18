<?php

$sisi = 2 ;
$panjang = 4 ;
$lebar = 5 ;
$tinggi = 6 ;
$jari = 4 ;
$alas = 5 ;

#persegi
$luas_persegi = $sisi * $sisi ;
#persegi panjang
$luas_persegi_panjang = $panjang * $lebar ;
#segitiga
$luas_segitiga = 1/2 * $alas * $tinggi ;
#lingkaran
$luas_lingkaran = 3.14 * $jari * $jari ;
#luasjajargenjang
$luas_jajargenjang = $alas * $tinggi ;

echo "luas persegi = sisi * sisi = ". $luas_persegi. "<br>";
echo "luas persegi panjang = panjang * lebar = ". $luas_persegi_panjang. "<br>";
echo "luas segitiga = 1/2 * alas * tinggi = ". $luas_segitiga. "<br>";
echo "luas lingkaran = 3.14 * r * r = ". $luas_lingkaran. "<br>";
echo "luas jajargenjang = alas * tinggi = ". $luas_jajargenjang. "<br>";

?>