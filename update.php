<?php

include 'connect.php';

$id_register = $_POST['id_register'];

$nama_depan = $_POST['nama_depan'];
$negara = $_POST['negara'];
$kode_pos = $_POST['kode_pos'];
$hp = $_POST['nomor_handphone'];
$email = $_POST['email'];
$nama_belakang = $_POST['nama_belakang'];
$kota = $_POST['kota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl = $_POST['tanggal_lahir'];

$query = "UPDATE tbl_register SET nama_depan = '$nama_depan', negara = '$negara', kode_pos = '$kode_pos', nomor_handphone = '$hp', email = '$email', nama_belakang = '$nama_belakang', kota = '$kota', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tgl' WHERE id_register = '$id_register'";
    
mysqli_query($connect, $query);

header("location: dashboard.php");

?>