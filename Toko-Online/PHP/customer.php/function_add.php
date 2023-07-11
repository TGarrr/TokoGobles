<?php

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

$conn = mysqli_connect("localhost","root","","tokosepatu") or die("Connection Failed");

$sql = "INSERT INTO customer(username,email,password) VALUES ('{$username}','{$email}','{$password}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Toko-Online/PHP/customer.php/index.php");

mysqli_close($conn);

?>
