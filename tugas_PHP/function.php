<?php

 function persegi($sisi = 2){
    $rumus = $sisi * $sisi ;
    echo "sisi = $sisi <br>";
    echo "rumus luas persegi adalah <br> sisi x sisi = ".$rumus. "<br>";
 }
 function persegi_panjang($panjang, $lebar){
    $rumus1 = $panjang * $lebar ;
    echo "panjang = $panjang <br>";
    echo "lebar = $lebar <br>";
    echo "rumus luas persegi panjang adalah <br> panjang x lebar = ".$rumus1."<br>";
 }
 function kubus($rusuk){
    $rumus2 = $rusuk * $rusuk * $rusuk ;
    echo "rusuk = $rusuk <br>";
    echo "rumus volume kubus adalah <br> rusuk x rusuk x rusuk = ".$rumus2."<br>";
 }
  function segitiga($alas, $tinggi){
     $rumus3 = 1/2* $alas * $tinggi ;
     echo "alas = $alas <br>";
     echo "tinggi = $tinggi <br>";
     echo "rumus luas segitiga adalah <br> 1 / 2 x alas x tinggi = ".$rumus3."<br>";
  }
  function tabung($tinggi, $jari){
     $rumus4 = 3.14 * $jari * $jari * $tinggi ;
     echo "jari-jari = $jari <br>";
     echo "tinggi = $tinggi <br>";
     echo "rumus luas segitiga adalah <br> phi x jari-jari x jari-jari x tinggi = ".$rumus4."<br>";
  }

 persegi(2);
 persegi_panjang(2,5);
 kubus(3);
 segitiga(6,4);
 tabung(8,5);
?>