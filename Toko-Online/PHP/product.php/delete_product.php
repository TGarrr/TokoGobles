<?php

$productID = $_GET['productID'];

include 'koneksi.php';

$sql = "DELETE FROM product WHERE productID = {$productID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/product.php/index.php");

mysqli_close($conn);

?>
