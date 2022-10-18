<?php

 $name = $_POST['username'];
 $msg = $_POST['msg'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];

$conn = mysqli_connect("localhost","root","","realestate") or die("Connection Failed");

$sql = "INSERT INTO contact(username,msg,email,phone) VALUES ('{$name}','{$msg}','{$email}','{$phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
