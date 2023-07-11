<?php
//menangkap data yan dikirim dari form
$productID = $_POST['productID'];
$productname = $_POST['productname'];
$sku = $_POST['sku'];
$price = $_POST['price'];
$stok = $_POST['stok'];
$kategoriID = $_POST['kategoriID'];

//koneksi database
include 'koneksi.php';

$sql = "UPDATE product SET productname= '{$productname}', sku = '{$sku}', price = '{$price}', stok = '{$stok}' , kategoriID = '{$kategoriID}' WHERE productID = {$productID}";
// echo $sql;
$result = mysqli_query($conn, $sql) or die("Gagal."); 

header("Location: http://localhost/Toko-Online/PHP/product.php/index.php");

mysqli_close($conn);

?>
