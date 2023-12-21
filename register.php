<?php

include 'connect.php';

$nama_depan = $_POST['nama_depan'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jenis_identitas = $_POST['jenis_identitas'];
$nomor_identitas = $_POST['nomor_identitas'];
$username = $_POST['username'];

$nama_belakang = $_POST['nama_belakang'];
$negara = $_POST['negara'];
$tgl = $_POST['date'];
$kode_negara = $_POST['kode_negara'];
$handphone = $_POST['nomor_handphone'];
$password = $_POST['password'];

if (isset($_POST['register'])) {
    $query = "SELECT * FROM tbl_register WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    $nama_foto = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $file_temp = $_FILES['foto']['tmp_name'];

    // the code inside the if statement will be executed 
    // when there are zero rows in the result set, indicating that no records were found based on the query.

    if (!$result -> num_rows > 0) {
        if ($size < 1044070) {
            move_uploaded_file($file_temp, 'file/' . $nama_foto);  

            $query = "INSERT INTO tbl_register(nama_depan, email, kota, kode_pos, jenis_kelamin, 
            jenis_identitas, nomor_identitas, username, nama_belakang, negara, tanggal_lahir, kode_negara, 
            nomor_handphone, password, foto) 
            VALUES ('$nama_depan', '$email', '$kota', '$kode_pos', '$jenis_kelamin', '$jenis_identitas', '$nomor_identitas',
            '$username','$nama_belakang', '$negara', '$tgl', '$kode_negara', '$handphone', '$password', '$nama_foto')";
    
            $result = mysqli_query($connect, $query);
        
            if ($result) {
                echo 
                    '<script LANGUAGE="JavaScript">
                    window.alert("Login success")
                    window.location.href="login.html";
                    </script>';
            } else {
                die(
                    "<script LANGUAGE='JavaScript'>
                    window.alert('login failed')
                    window.location.href='register.html';
                    </script>"
                );
            }
        }
    } else {
        echo 
            '<script LANGUAGE="JavaScript">
            window.alert("Username Sudah Terdaftar")
            window.location.href="register.html";
            </script>';
    }
}

?>