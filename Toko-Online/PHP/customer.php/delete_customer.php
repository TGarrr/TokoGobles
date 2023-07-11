<?php

$customerID = $_GET['customerID'];

include 'database.php';

$sql = "DELETE FROM customer WHERE customerID = {$customerID}";
$result = mysqli_query($conn, $sql) or die("Gagal.");

header("Location: http://localhost/Toko-Online/PHP/customer.php/index.php");

mysqli_close($conn);

?>
