<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pabrik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        .divl{
            border: 1px outset black;
            background-color: black;    
            text-align: center;
            color: red;
            margin: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
        include_once("penghubung.php");
        $pabriks = mysqli_query($koneksi, "SELECT * FROM pabrik")
?>
    
<div class="container-fluid">
    <div class="row" style="margin: 40px 0px 30px 0px;">
        <div class="col-md-3 text-center"></div>
        <div class="col-md-2 text-center">
            <h4><a href="index.php" class="btn btn-light btn-outline-danger btn-lg">obat</a></h4>
        </div>
        <div class="col-md-2 text-center">
            <h4><a href="pabrik.php" class="btn btn-light btn-outline-danger btn-lg">pabrik</a></h4>
        </div>
        <div class="col-md-2 text-center">
            <h4><a href="spesifikasi.php" class="btn btn-light btn-outline-danger btn-lg">Spesifikasi</a></h4>
        </div>
    </div>
  <div class="row align-items-start">
    <table class="table table-dark">
        <thead style="text-align:center;">
            <tr>
                <th class="text-center">ID Pabrik</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomer Telpon</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Edit & Delete</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <?php
                while ($pabrik = mysqli_fetch_array($pabriks)) {
                    echo"
                        <tr>
                        <td>".$pabrik['id_pabrik']."</td>
                        <td>".$pabrik['nama']."</td>
                        <td>".$pabrik['no_telp']."</td>
                        <td>".$pabrik['alamat']."</td>
                        <td>
                        <a href='edit_pabrik.php?name=".$pabrik['id_pabrik']."' class='btn btn-info'>Edit</a>
                        <a href='#' onclick='konfirmasi(`".$pabrik['id_pabrik']."`)' class='btn btn-danger'>Delete</a>
                        </td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>
<div class="row"><a class="btn btn-secondary" href="add_pabrik.php" role="button">Tambah Data Pabrik</a></div>
<div class="divl">Sebelum menambahkan pabrik tolong ingat <span style="font-weight:bold;">id terakhir yang ada di data ini</span> dan jangan sampai id anda sama seperti id yang telah ada</div>
</div>
</body>
</html>
<script>
    function konfirmasi(id) {
        if (confirm('yakin di hapus nggak nih data pabriknya ?')) {
            window.location.href ='delete_pabrik.php?name='+id;
        }
    }
</script>
</body>
</html>