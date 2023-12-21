<?php

session_start();
include 'connect.php';

$username = $_POST['nama'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    $query = "SELECT * FROM tbl_register WHERE username = '$username' and password = '$password'";
    $userCheck = mysqli_query($connect, $query);

    if (mysqli_num_rows($userCheck) == 1) {
        $user = mysqli_fetch_assoc($userCheck);
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];

        header('Location: dashboard.php');
        exit();

    } else {
        die(
            "<script LANGUAGE='JavaScript'>
            window.alert('login failed')
            window.location.href='login.html';
            </script>"
        );
    }
}

?>