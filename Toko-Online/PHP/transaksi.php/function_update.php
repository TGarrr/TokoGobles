<?php
//menangkap data yan dikirim dari form
$transaksiID = $_POST['transaksiID'];
$customerID = $_POST['customerID'];
$transaksiDate = "TRX-".date("Y-m-d")."-".rand(10,100);

//koneksi database
include 'koneksi.php';

$sql = "UPDATE transaksi SET customerID= '{$customerID}', transaksiDate = '{$transaksiDate}' WHERE transaksiID = {$transaksiID}";
$result = mysqli_query($conn, $sql) or die("Gagal."); 


header("Location: http://localhost/Toko-Online/PHP/transaksi.php/index.php");

mysqli_close($conn);

?>
