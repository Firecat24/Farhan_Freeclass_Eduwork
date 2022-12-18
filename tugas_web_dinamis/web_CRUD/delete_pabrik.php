<?php
    include_once("penghubung.php");
    $pabrik = $_GET['name'];
    $delete = mysqli_query($koneksi, "DELETE FROM pabrik WHERE id_pabrik='$pabrik'");

    header("Location: pabrik.php")
?>