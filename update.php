<?php

include 'connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE tbl_register SET username = '$username', password = '$password' WHERE id = '$id'";
mysqli_query($connect, $query);

header("location: manage.php");

?>