<?php

$nama = "Farhan";
$tinggi_badan = 170;
$tinggi_badan_asli = $tinggi_badan/100;
$berat_badan = 70;
$rumus_BMI = $berat_badan / ($tinggi_badan_asli**2);

echo "Halo ". $nama. " nilai BMI anda adalah ". $rumus_BMI. " anda termasuk ";

    if ($rumus_BMI < 18.5) {
        echo "Kurus";
    }elseif ( $rumus_BMI > 18.5 and $rumus_BMI < 25) {
        echo "Sedang";
    }else {
        echo "Gemuk";
    }

?>