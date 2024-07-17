<?php
include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$position=$_POST['position'];
$password=$_POST['password'];

mysqli_query($conn,"INSERT INTO `student`(`name`, `email`, `position`, `password`) VALUES('$name', '$email', '$position', '$password')");
?>