<?php

 $kategoriname= $_POST['kategoriname'];
 $deskripsi = $_POST['deskripsi'];
 

$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");

$sql = "INSERT INTO kategori(kategoriname,deskripsi) VALUES ('{$kategoriname}','{$deskripsi}')";    
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/kategori.php/index.php");

mysqli_close($conn);

?>
