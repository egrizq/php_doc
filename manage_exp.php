<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
</head>

<body>
    <?php
        session_start();

        include("connect.php");

        $username = $_SESSION["username"];
        $query = "SELECT * FROM tbl_register WHERE username = '$username'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            ?>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color:blue;" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:blue;" href="manage_exp.php">Lihat Data</a>
                    </li>
                </ul>

                <span class="navbar-text" style="color:black;">
                    Welcome | <?php echo $user["nama_depan"];} ?>
                </span>

                <span class="navbar-text">
                    <a class="nav-link" style="color:blue;" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="text-end pt-3 pb-5">

                    <button class="btn btn-success" href="excel.php" target="_blank">Download
                        Excel</button>
                </div>

                <table class="table">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Kode Post</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opsi</th>
                    </tr>

                    <?php
            
                include 'connect.php';
                
                $no = 1;
                $query = "SELECT * FROM tbl_register";
                $result = mysqli_query($connect, $query);
            
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['nama_depan']. ' ' . $row['nama_belakang']; ?></td>
                        <td><?php echo $row['negara']; ?></td>
                        <td><?php echo $row['kota']; ?></td>
                        <td><?php echo $row['kode_pos']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td><?php echo $row['nomor_handphone']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="delete.php?id_register=<?php echo $row['id_register']; ?>" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                };
                ?>
                </table>

            </div>
        </div>
    </div>

    <script src="boostrap/js/jquery.js"></script>
    <script src="boostrap/js/popper.js"></script>
    <script src="boostrap/js/bootstrap.js"></script>

</body>

</html>