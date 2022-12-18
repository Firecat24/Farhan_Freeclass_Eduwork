<!DOCTYPE html>
<body style="margin: 0;">
    <div style="background-color:orange; margin : auto; font-size: 30px; padding: 10px 0px 10px 20px;">Daftar Nilai</div>
<table border="1" style="margin: 100px auto 0px auto;">
    <tr>
        <th style="padding: 5px 20px 5px 20px;"> No. </th>
        <th style="padding: 5px 20px 5px 20px;"> Nama </th>
        <th style="padding: 5px 20px 5px 20px;"> Tanggal Lahir </th>
        <th style="padding: 5px 20px 5px 20px;"> Umur </th>
        <th style="padding: 5px 20px 5px 20px;"> Alamat </th>
        <th style="padding: 5px 20px 5px 20px;"> Kelas </th>
        <th style="padding: 5px 20px 5px 20px;"> Nilai </th>
        <th style="padding: 5px 20px 5px 20px;"> Hasil </th>
    </tr>
    <?php
    $array = file_get_contents('data.json');
    $data = json_decode($array,true);
    $i = 1;
    $tahun = date("Y") ;
        foreach ($data as $value) {
            ?>
            <tr>
                    <td style="padding: 10px;"> <?php echo $i. "." ?></td>
                    <?php $i++ ?>
                    <td style="padding: 10px;"> <?php echo $value['nama'] ?> </td>
                    <td style="padding: 10px;"> <?php echo $value['tanggal_lahir'] ?> </td>
                    <td style="padding: 10px;"> <?php echo $tahun - substr($value['tanggal_lahir'],0,4). " Tahun"?></td>
                    <td style="padding: 10px;"> <?php echo $value['alamat'] ?> </td>
                    <td style="padding: 10px;"> <?php echo $value['kelas'] ?> </td>
                    <td style="padding: 10px;"> <?php echo $value['nilai'] ?> </td>
                    <td style="padding: 10px;"> 
                        <?php 
                        $nilai = $value['nilai'];
                            if ($nilai <= 100 and 90 <= $nilai) {
                                echo "A";
                            }
                            elseif ($nilai < 90 and $nilai >= 80) {
                                echo "B";
                            }
                            elseif ($nilai < 80 and $nilai >= 70) {
                                echo "C";
                            }
                            else {
                                echo "D";
                            }
                        ?>
                    </td>
            </tr>
            <?php
        }
    ?>
</table>
</body>
</html>