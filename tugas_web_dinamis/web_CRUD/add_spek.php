<!DOCTYPE html>
<html>
<head>
    <title>menambahkan data obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<?php
        include_once("penghubung.php");
        $spesifikasis = mysqli_query($koneksi, "SELECT * FROM spesifikasi ");
?>
<div class="container">
    <div class="row" style="margin: 50px 0px 10px 0px;">
        <div class="col-md-12 text-center">
            <h3>Form tambah data spesifikasi</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="add_spek.php" method="post" name="form3">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td class="text-center">ID Spesifikasi</td>
                        <td><input type="text" class="form-control" name="id_spesifikasi"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Keadaan</td>
                        <td><input type="text" class="form-control" name="keadaan"></td>
                    </tr>
                    <tr>
                        <td class="text-center">kadaluarsa</td>
                        <td><input type="date" class="form-control" name="kadaluarsa"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Jenis Obat</td>
                        <td><input type="text" class="form-control" name="jenis"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Warna</td>
                        <td><input type="text" class="form-control" name="warna"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Resep Dokter (yes/no)</td>
                        <td><input type="text" class="form-control" name="resep"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" class="form-control btn btn-success" name="Submit" value="Tambah ke Daftar Spesifikasi"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php
    if (isset($_POST['Submit'])) {
        $id_spesifikasi = $_POST['id_spesifikasi'];
        $keadaan = $_POST['keadaan'];
        $kadaluarsa = $_POST['kadaluarsa'];
        $jenis = $_POST['jenis'];
        $warna = $_POST['warna'];
        $resep = $_POST['resep'];
        
        $insert = mysqli_query($koneksi, "INSERT INTO `spesifikasi` (`id_spesifikasi`, `keadaan`, `kadaluarsa`, `jenis_obat`,`warna`,`resep_dokter`) 
                                        VALUES ('$id_spesifikasi','$keadaan','$kadaluarsa','$jenis','$warna','$resep')")or die(mysqli_error($koneksi));
        header("Location: spesifikasi.php");
    }
?>