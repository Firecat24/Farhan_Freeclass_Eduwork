<?php
$servername = "localhost";
$database = "apotek";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * FROM pabrik";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "pabrik : ". $row["nama"]. " || ". $row["no_telp"]." || ". $row["alamat"]."<br>";
    }
}else {
    echo "0 results";
}
$conn->close();
?>