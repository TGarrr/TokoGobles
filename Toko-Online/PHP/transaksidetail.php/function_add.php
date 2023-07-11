<?php
$transaksiID = $_POST ['transaksiID'];
$productID = $_POST ['productID'];
$quantity = $_POST ['quantity'];


$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");

$sql ="INSERT INTO transaksidetail (transaksiID,productID,quantity) VALUES ('".$transaksiID."','$productID','$quantity')";
echo $sql;
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/transaksidetail.php/index.php");

mysqli_close($conn);

?>
