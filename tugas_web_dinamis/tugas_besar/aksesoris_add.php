<!DOCTYPE html>
<html>
<head>
    <title>Menambahkan Data Aksesoris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<?php
        include_once("koneksi.php");
        $laptops = mysqli_query($koneksi, "SELECT * FROM aksesoris ");
?>
<div class="container">
    <div class="row" style="margin: 50px 0px 10px 0px;">
        <div class="col-md-12 text-center">
            <h3>Form Tambah Data Aksesoris</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="aksesoris_add.php" method="post" name="form1" enctype="multipart/form-data">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td class="text-center">ID</td>
                        <td><input type="text" readonly class="form-control" name="id"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Nama</td>
                        <td><input type="text" class="form-control" name="nama"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Harga</td>
                        <td><input type="text" class="form-control" name="harga"></td>
                    </tr>
                    <tr>
                        <td class="text-center">Gambar</td>
                        <td><input type="file" name="gambar"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" class="form-control btn btn-success" name="Submit" value="Tambah ke Daftar Aksesoris"></td>
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
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];
        
        $insert = mysqli_query($koneksi, "INSERT INTO `aksesoris` (`id_aksesoris`, `nama`, `harga`, `gambar`) 
                                        VALUES ('$id','$nama','$harga','$gambar')")or die(mysqli_error($koneksi));
        if ($insert) {
            move_uploaded_file($_FILES['gambar']['tmp_name'], "aksesoris/".$_FILES['gambar']['name']);
            header("Location: aksesoris.php");
        }
    }