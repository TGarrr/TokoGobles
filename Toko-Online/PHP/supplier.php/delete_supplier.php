<?php

$supplierID = $_GET['supplierID'];

include 'koneksi.php';

$sql = "DELETE FROM supplier WHERE supplierID = {$supplierID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/supplier.php/index.php");

mysqli_close($conn);

?>
