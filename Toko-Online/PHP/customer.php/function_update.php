<?php
//menangkap data yan dikirim dari form
$customerID = $_POST['customerID'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//koneksi database
include 'database.php';

$sql = "UPDATE customer SET username= '{$username}', email = '{$email}', password = '{$password}' WHERE customerID = {$customerID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/customer.php/index.php");

mysqli_close($conn);

?>
