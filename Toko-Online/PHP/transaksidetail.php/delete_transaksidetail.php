<?php

$transaksiID = $_GET['transaksiID'];

include 'koneksi.php';

$sql = "DELETE FROM transaksi WHERE transaksiID = {$transaksiID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/transaksidetail.php/index.php");

mysqli_close($conn);

?>
