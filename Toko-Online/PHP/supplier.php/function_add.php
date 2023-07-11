<?php

 $suppliername = $_POST['suppliername'];
 $nohp = $_POST['nohp'];
 $alamat = $_POST['alamat'];
 $kota = $_POST['kota'];
 $kodepost = $_POST['kodepost'];

$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");

$sql = "INSERT INTO supplier(suppliername,nohp,alamat,kota,kodepost) VALUES ('{$suppliername}','{$nohp}','{$alamat}','{$kota}','{$kodepost}')";
echo $sql;
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/supplier.php/index.php");

mysqli_close($conn);

?>
