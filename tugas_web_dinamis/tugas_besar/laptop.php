<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="hand_phone.css">
</head>
<body>
<?php
        include_once("koneksi.php");
        $laptops = mysqli_query($koneksi, "SELECT * FROM laptop")
?>
    <div class="container-fluid">
        <div class="row" style="background-color: aqua; height: 50px; padding:2px 0px 2px 0px;">
            <div class="col-md-3" style="padding-top:4px;"><a class=" btn btn-secondary" href="laptop_add.php" role="button">Tambah Data Laptop</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="hand_phone.php" class="joo">Smart Phone</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="aksesoris.php" class="joo">Aksesoris</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="laptop.php" class="joo">Laptop</a></div>
            <div class="col-md-1 text-center " style="padding-top:9px;"><a href="makanan.php" class="joo">Makanan</a></div>
            <div class="col-md-1"></div>
            <div class="col-md-1" style="padding-top:4px;"><a href="index.php" class="btn btn-primary btn btn-outline-dark">Dashbour</a></div>
        </div>
    </div>
    <div class="container-fluid bg-info" style="margin: 10px 0px">
            <?php
                if (mysqli_num_rows($laptops)>0) {
                    foreach ($laptops as $laptop) {
                    ?>
                        <div class='kotak'>
                                    <table>
                                        <tr style='height:250px'>
                                        <td><img src="<?php echo "laptop/".$laptop['gambar'];?>" style='width:200px;'></td>
                                        </tr>
                                        <tr style='height:50px'>
                                            <td  class='about'>
                                                <hr style='height:2px;'>
                                                <h5><?php echo $laptop['nama'];?></h5>
                                                Harga = <?php echo $laptop['harga']; ?>
                                                <br>Merk = <?php echo $laptop['merk']; ?>
                                            </td>
                                        </tr>
                                        <tr style='text-align:center'>
                                            <td>
                                            <hr style='height:2px;'>
                                            <?php echo"
                                                <a href='laptop_edit.php?nami=".$laptop['id_laptop']."' class='btn btn-info'>Edit</a>"
                                                ?>
                                                <form action="laptop.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $laptop['id_laptop'];?>">
                                                    <input type="hidden" name="delete_gambar" value="<?php echo $laptop['gambar'];?>">
                                                    <button type="submit" name="delete" class='btn btn-danger'>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div><?php
                    }
                }
            ?>
    </div>
</body>
</html>
<?php
 if (isset($_POST['delete'])) {
    $id = $_POST['delete_id'];
    $gambar= $_POST['delete_gambar'];

    $delete = mysqli_query($koneksi, "DELETE FROM laptop WHERE id_laptop='$id'");
    unlink("laptop/".$gambar);
    echo "<meta http-equiv='refresh' content='0'>";
 }
?>