<?php

$server = "localhost";
$user = "root";
$pass = '';
$database = "411212101_muhammad_rizq_ramadhan";
$connect = mysqli_connect($server, $user, $pass, $database);

if (!$connect) {
    die("<script>alert('Gagal tersambung dengan database')</script>");
}
    

/* 

RUN THE FILE

1. put the folder in xampp/htdocs
2. run it on xampp
3. open browser and type http://localhost/Filler/login.html

LOGIN TO DATABASE

1. run xampp
2. open browser and type http://localhost/phpmyadmin/

*/
?>