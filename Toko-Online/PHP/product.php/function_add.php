<?php

 $productname = $_POST['productname'];
 $sku = $_POST['sku'];
 $price = $_POST['price'];
 $stok = $_POST['stok'];
 $kategoriID = $_POST['kategoriID'];

$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");
$sql = "INSERT INTO product(productname,sku,price,stok,kategoriID) VALUES ('{$productname}','{$sku}','{$price}','{$stok}','{$kategoriID}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/product.php/index.php");

mysqli_close($conn);

?>
