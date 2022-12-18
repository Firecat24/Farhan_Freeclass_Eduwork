<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dinamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dinamis.css">
</head>
<body>
<?php
        include_once("koneksi.php");
        $hps = mysqli_query($koneksi, "SELECT * FROM hp");
        $laptops = mysqli_query($koneksi, "SELECT * FROM laptop");
        $makanans = mysqli_query($koneksi, "SELECT * FROM makanan");
        $aksesoriss = mysqli_query($koneksi, "SELECT * FROM aksesoris");
?>
    <div class="container-fluid">
        <div class="row" style="background-color: aqua; height: 50px; padding:2px 0px 2px 0px;">
            <div class="col-md-3"></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="hand_phone.php" class="joo">Smart Phone</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="aksesoris.php" class="joo">Aksesoris</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="laptop.php" class="joo">Laptop</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="makanan.php" class="joo">Makanan</a></div>
            <div class="col-md-1"></div>
            <div class="col-md-1" style="padding-top:4px;"><a href="index.php" class="btn btn-primary btn btn-outline-dark">Dashbour</a></div>
        </div>
    </div>
    <div class="container-fluid center bg_image">
        <h1 class="font">Semoga anda senang berbelanja disini <br><h2>Desa Konoha tercinta</h2></h1>
        <h4 style="font-family:Cambria;">Chapter melawan Pain</h4> <br>
    </div>
    <!-- HP -->
<div class="container-fluid" style="outline-style: solid; text-align:center; padding:10px 0px; margin: 10px 0px;">
<h2>Hand Phone</h2>
<hr>
    <div class="row">
        <?php
            if (mysqli_num_rows($hps)>0) {
                foreach ($hps as $hp) {
                ?>
                <div class="col">
                    <div>
                        <div><img src="<?php echo "gambar/".$hp['gambar'];?>" alt="" class="gambar"></div>
                        <div>
                            <h5><?php echo $hp['nama'];?></h5>
                                Harga = <?php echo $hp['harga']; ?>
                            <br>Merk = <?php echo $hp['merk']; ?>
                            <br>Warna = <?php echo $hp['warna']; ?>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
    </div>
</div>
<!-- Aksesoris -->
<div class="container-fluid" style="outline-style: solid; text-align:center; padding:10px 0px; margin: 10px 0px;">
<h2>Aksesoris Laptop dan Lainnya</h2>
<hr>
    <div class="row">
            <?php
                if (mysqli_num_rows($aksesoriss)>0) {
                    foreach ($aksesoriss as $aksesoris) {
                    ?>
                    <div class="col">
                        <div>
                            <div><img src="<?php echo "aksesoris/".$aksesoris['gambar'];?>" alt="" class="gambar"></div>
                            <div>
                                <h5><?php echo $aksesoris['nama'];?></h5>
                                    Harga = <?php echo $aksesoris['harga']; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
<!-- laptop -->
<div class="container-fluid" style="outline-style: solid; text-align:center; padding:10px 0px; margin: 10px 0px;">
<h2>Laptop</h2>
<hr>
    <div class="row">
        <?php
            if (mysqli_num_rows($laptops)>0) {
                foreach ($laptops as $laptop) {
                ?>
                <div class="col">
                    <div>
                        <div><img src="<?php echo "laptop/".$laptop['gambar'];?>" alt="" class="gambar"></div>
                        <div>
                            <h5><?php echo $laptop['nama'];?></h5>
                                Harga = <?php echo $laptop['harga']; ?>
                            <br>Merk = <?php echo $laptop['merk']; ?>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
    </div>
</div>
<!-- makanan -->
<div class="container-fluid" style="outline-style: solid; text-align:center; padding:10px 0px; margin: 10px 0px;">
<h2>Makanan</h2>
<hr>
    <div class="row">
        <?php
            if (mysqli_num_rows($makanans)>0) {
                foreach ($makanans as $makanan) {
                ?>
                <div class="col">
                    <div>
                        <div><img src="<?php echo "makanan/".$makanan['gambar'];?>" alt="" class="gambar"></div>
                        <div>
                            <h5><?php echo $makanan['nama'];?></h5>
                                Harga = <?php echo $makanan['harga']; ?>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
    </div>
</div>
</body>
</html>