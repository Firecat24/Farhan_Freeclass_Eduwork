<?php
    include_once("penghubung.php");
    $obat = $_GET['nama'];
    $delete = mysqli_query($koneksi, "DELETE FROM obat WHERE id_obat='$obat'");

    header("Location: index.php")
?>