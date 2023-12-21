<?php

include 'connect.php';

$id_register = $_GET['id_register'];

$query = "DELETE FROM tbl_register WHERE id_register='$id_register'";
mysqli_query($connect, $query);

header("location:manage_exp.php");

?>