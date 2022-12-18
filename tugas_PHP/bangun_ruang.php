<?php

$rusuk = 2 ;
$panjang = 4 ;
$lebar = 5 ;
$tinggi = 6 ;
$jari = 4 ;

#kubus
$volume_kubus = $rusuk * $rusuk * $rusuk ;
#balok
$volume_balok = $panjang * $lebar * $tinggi;
#tabung
$volume_tabung = 3.14 * $jari * $jari * $tinggi;

echo "volume kubus = r * r * r = ". $volume_kubus. "<br>";
echo "volume balok = p * l * t = ". $volume_balok. "<br>";
echo "volume tabung = phi * r * r * t = ". $volume_tabung. "<br>";

?>