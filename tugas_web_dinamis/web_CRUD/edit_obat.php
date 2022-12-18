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
        $pabriks = mysqli_query($koneksi, "SELECT * FROM pabrik ");
        $keadaans = mysqli_query($koneksi, "SELECT * FROM spesifikasi ");
        
        $id_o = $_GET['nama'];
        $obats = mysqli_query($koneksi, "SELECT * FROM obat WHERE id_obat='$id_o' ");

        while ($obat = mysqli_fetch_array($obats)) {
            $id_obat = $obat['id_obat'];
            $nama_obat = $obat['nama'];
            $harga_obat = $obat['harga'];
            $jumlah_barang = $obat['jumlah_barang'];
            $id_pabrik = $obat['id_pabrik'];
            $spesifikasi_obat = $obat['spesifikasi_obat'];
        }
?>
<div class="container">
    <div class="row" style="margin: 50px 0px 10px 0px;">
        <div class="col-md-12 text-center">
            <h3>Form Edit Data Obat</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="edit_obat.php?nama=<?php echo $id_o; ?>" method="post" name="form1">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td class="text-center">ID obat</td>
                        <td><input type="text" readonly="" class="form-control" name="id_obat" value="<?php echo $id_obat; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nama</td>
                        <td><input type="text" class="form-control" name="nama" value="<?php echo $nama_obat; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Harga</td>
                        <td><input type="text" class="form-control" name="harga" value="<?php echo $harga_obat; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Jumlah Barang</td>
                        <td><input type="text" class="form-control" name="jumlah_barang" value="<?php echo $jumlah_barang; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nama pabrik</td>
                        <td>
                            <select class="form-control" name="id_pabrik">
                                <?php
                                while ($pabrik = mysqli_fetch_array($pabriks)) {
                                    echo"<option ".($pabrik['id_pabrik'] == $id_pabrik ? 'selected' : '').">".$pabrik["id_pabrik"]."</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">keadaan</td>
                        <td>
                            <select class="form-control" name="spesifikasi_obat">
                                <?php
                                while ($keadaan = mysqli_fetch_array($keadaans)) {
                                    echo"<option ".($keadaan['id_spesifikasi'] == $spesifikasi_obat ? 'selected' : '').">".$keadaan["id_spesifikasi"]."</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" class="form-control btn btn-success" name="Submit" value="Edit data Obat ini"></td>
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
        $id_obat = $_POST['id_obat'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $id_pabrik = $_POST['id_pabrik'];
        $spesifikasi_obat = $_POST['spesifikasi_obat'];
        
        $result = mysqli_query($koneksi, "UPDATE obat SET id_obat='$id_obat',nama='$nama',harga='$harga',
                                jumlah_barang='$jumlah_barang',id_pabrik='$id_pabrik',
                                spesifikasi_obat='$spesifikasi_obat' WHERE id_obat='$id_o'")or die(mysqli_error($koneksi));
        header("Location: index.php");
    }
?>