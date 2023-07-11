<?php
//menangkap data yan dikirim dari form
$kategoriID = $_POST['kategoriID'];
$kategoriname = $_POST['kategoriname'];
$deskripsi = $_POST['deskripsi'];


//koneksi database
include 'database1.php';

$sql = "UPDATE kategori SET kategoriname= '{$kategoriname}', deskripsi = '{$deskripsi}' WHERE kategoriID = {$kategoriID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/kategori.php/index.php");

mysqli_close($conn);

?>
