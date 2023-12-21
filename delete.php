<?php

include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM mydata WHERE id='$id'";
mysqli_query($connect, $query);

header("location:manage.php");

?>