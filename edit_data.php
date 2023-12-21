<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
</head>

<body>
    <?php
        include "connect.php";

        $id = $_GET["id_register"];
        $query = "SELECT * FROM tbl_register WHERE id_register = '$id'";
        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_array($result)) {

    ?>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color:blue;" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:blue;" href="manage.php">Lihat Data</a>
                    </li>
                </ul>

                <span class="navbar-text" style="color:black;">
                    Welcome | <?php echo $row["nama_depan"]; ?>
                </span>

                <span class="navbar-text">
                    <a class="nav-link" style="color:blue;" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class='row'>
            <div class='col-2'></div>

            <div class='col-8'>
                <h3 class='text-center pb-2'>Edit Profile</h3>

                <form method="post" action="update.php">
                    <div class='row'>
                        <div class='col-6'>
                            <!-- Include a hidden input field for the 'id' -->
                            <input type="hidden" name="id_register" value="<?php echo $row['id_register']; ?>">

                            <small>Nama Depan</small>
                            <input class="form-control" type="text" name="nama_depan"
                                value="<?php echo $row['nama_depan']; ?>" required>

                            <small>Negara</small>
                            <input class="form-control" type="text" name="negara" value="<?php echo $row['negara']; ?>"
                                required>

                            <small>Kode Pos</small>
                            <input class="form-control" type="text" name="kode_pos"
                                value="<?php echo $row['kode_pos']; ?>" required>

                            <small>Nomor Handphone</small>
                            <input class="form-control" type="text" name="nomor_handphone"
                                value="<?php echo $row['nomor_handphone']; ?>" required>

                        </div>

                        <div class='col-6'>
                            <small>Nama Belakang</small>
                            <input class="form-control" type="text" name="nama_belakang"
                                value="<?php echo $row['nama_belakang']; ?>" required>

                            <small>Kota</small>
                            <input class="form-control" type="text" name="kota" value="<?php echo $row['kota']; ?>"
                                required>

                            <small>Jenis Kelamin</small>
                            <input class="form-control" type="text" name="jenis_kelamin"
                                value="<?php echo $row['jenis_kelamin']; ?>" required>

                            <small>Tanggal Lahir</small><br>
                            <input class="form-control" type="date" name="tanggal_lahir"
                                value='<?php echo $row['tanggal_lahir']; ?>' required>

                        </div>
                    </div>
                    <small>email</small>
                    <input class="form-control" type="text" name="email" value="<?php echo $row['email']; } ?>"
                        required><br>

                    <div class="text-center pt-1">
                        <input type="submit" name="update" class="btn btn-success col-md-2" value="Update">
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src="boostrap/js/jquery.js"></script>
    <script src="boostrap/js/popper.js"></script>
    <script src="boostrap/js/bootstrap.js"></script>
</body>

</html>