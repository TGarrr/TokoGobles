<?php
$transaksiDate = "TRX-".date("Y-m-d")."-".rand(10,100);
$customerID = $_POST ['customerID'];
$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");

$sql ="INSERT INTO transaksi (transaksiDate,customerID) VALUES ('".$transaksiDate."','$customerID')";
echo $sql;
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/transaksi.php/index.php");

mysqli_close($conn);

?>
