<?php

 $name = $_POST['sname'];
 $msg = $_POST['saddress'];
 $email = $_POST['sclass'];
 $phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$name}','{$msg}','{$email}','{$phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
