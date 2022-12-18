<!DOCTYPE html>
<body>
    <div>
        <table align="left" border="1">
            <tr align="left" style="background-color:blue; text-align:center;">
                <td> No </td>
                <td> Nama </td>
                <td> Kelas </td>
            </tr>
            <?php
            $j = 10;
            for ($i=1; $i <= 10; $i++) { 
                echo"<tr>";
                for ($a=1; $a <=1 ; $a++) { 
                    echo "<td>".$i. "</td>";
                }
                for ($b=1; $b <= 1; $b++) { 
                    echo "<td> Nama ke ".$i."</td>";
                }
                echo "<td> Kelas ".$j."</td>";
                $j--;
                "</tr>";
            }
            ?>
        </table>
</body>
</html>