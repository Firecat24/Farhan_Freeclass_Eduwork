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
        
        $id_oo = $_GET['name'];
        $pabriks = mysqli_query($koneksi, "SELECT * FROM pabrik WHERE id_pabrik='$id_oo' ");

        while ($pabrik = mysqli_fetch_array($pabriks)) {
            $id_pabrik = $pabrik['id_pabrik'];
            $nama_pabrik = $pabrik['nama'];
            $no_telp = $pabrik['no_telp'];
            $alamat = $pabrik['alamat'];
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
            <form action="edit_pabrik.php?name=<?php echo $id_oo; ?>" method="post" name="form2">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td class="text-center">ID pabrik</td>
                        <td><input type="text" readonly="" class="form-control" name="id_pabrik" value="<?php echo $id_pabrik; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nama</td>
                        <td><input type="text" class="form-control" name="nama" value="<?php echo $nama_pabrik; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nomer Telpon</td>
                        <td><input type="text" class="form-control" name="nomer_telpon" value="<?php echo $no_telp; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Alamat</td>
                        <td><input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" class="form-control btn btn-success" name="Submit" value="Edit data Pabrik ini"></td>
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
        $id_pabrik = $_POST['id_pabrik'];
        $nama = $_POST['nama'];
        $no_telp = $_POST['nomer_telpon'];
        $alamat = $_POST['alamat'];

        $result = mysqli_query($koneksi, "UPDATE pabrik SET id_pabrik='$id_pabrik',nama='$nama',no_telp='$no_telp',
                                alamat='$alamat' WHERE id_pabrik='$id_oo'")or die(mysqli_error($koneksi));
        header("Location: pabrik.php");
    }
?>