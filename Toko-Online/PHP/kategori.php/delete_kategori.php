<?php

$kategoriID = $_GET['kategoriID'];

include 'database1.php';

$sql = "DELETE FROM kategori WHERE kategoriID = {$kategoriID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/kategori.php/index.php");

mysqli_close($conn);

?>
