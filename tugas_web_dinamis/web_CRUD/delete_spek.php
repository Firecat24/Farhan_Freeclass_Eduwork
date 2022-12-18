<?php
    include_once("penghubung.php");
    $spesifikasi = $_GET['nami'];
    $delete = mysqli_query($koneksi, "DELETE FROM spesifikasi WHERE id_spesifikasi='$spesifikasi'");

    header("Location: spesifikasi.php")
?>