<?php
//menangkap data yan dikirim dari form
$supplierID = $_POST['supplierID'];
$suppliername = $_POST['suppliername'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kodepost = $_POST['kodepost'];

//koneksi database
include 'koneksi.php';

$sql = "UPDATE supplier SET suppliername= '{$suppliername}', nohp = '{$nohp}', alamat = '{$alamat}', kota = '{$kota}', kodepost = '{$kodepost}' WHERE supplierID = {$supplierID}";
$result = mysqli_query($conn, $sql) or die("Gagal."); 

header("Location: http://localhost/Toko-Online/PHP/supplier.php/index.php");

mysqli_close($conn);

?>
