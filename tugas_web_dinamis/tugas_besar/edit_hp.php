<!DOCTYPE html>
<html>
<head>
    <title>Edit Data HP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<?php
        include_once("koneksi.php");
        $hps = mysqli_query($koneksi, "SELECT * FROM hp ");

        $id_ooo = $_GET['name'];
        $hps = mysqli_query($koneksi, "SELECT * FROM hp WHERE id_hp='$id_ooo' ");

        while ($hp = mysqli_fetch_array($hps)) {
            $id = $hp['id_hp'];
            $nama = $hp['nama'];
            $harga = $hp['harga'];
            $merk = $hp['merk'];
            $warna = $hp['warna'];
        }
?>
<div class="container">
    <div class="row" style="margin: 50px 0px 10px 0px;">
        <div class="col-md-12 text-center">
            <h3>Form tambah data hp</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="edit_hp.php?name=<?php echo $id_ooo; ?>" method="post" name="form3">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td class="text-center">ID</td>
                        <td><input type="text" readonly class="form-control" name="id_hp" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nama</td>
                        <td><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Harga</td>
                        <td><input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Merk</td>
                        <td><input type="text" class="form-control" name="merk" value="<?php echo $merk; ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Warna</td>
                        <td><input type="text" class="form-control" name="warna" value="<?php echo $warna; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" class="form-control btn btn-success" name="Submit" value="Edit Data HP ini"></td>
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
        $id_hp = $_POST['id_hp'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $merk = $_POST['merk'];
        $warna = $_POST['warna'];
        
        $result = mysqli_query($koneksi, "UPDATE hp SET id_hp='$id_hp',nama='$nama',harga='$harga',
                                            merk='$merk',warna='$warna' WHERE id_hp='$id_ooo'")or die(mysqli_error($koneksi));

        header("Location: hand_phone.php");
    }
?>