<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Login/Register
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid" style="padding-top: 1vh;">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-8">
                <form method="post" action="register.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <small>Nama Depan</small>
                            <input class="form-control" type="text" name="nama_depan" placeholder="Nama Depan" required>

                            <div class="pt-4">
                                <small>Email</small>
                                <input class="form-control" type="text" name="email" placeholder="Email" required><br>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <small>Kota</small>
                                    <input class="form-control" type="text" name="kota" placeholder="Kota" required><br>
                                </div>

                                <div class="col-6">
                                    <small>Kode Pos</small>
                                    <input class="form-control" type="text" name="kode_pos" placeholder="Kode Pos"
                                        required><br>
                                </div>
                            </div>

                            <small>Jenis Kelamin</small>
                            <select class="form-select" name="jenis_kelamin">
                                <option value="laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>

                            <div class="row">
                                <div class="col-md-6 pt-4">
                                    <small>Jenis Identitas</small>
                                    <select class="form-select" name="jenis_identitas">
                                        <?php
                                            include 'connect.php';

                                            $query = "SELECT NAMA_KARTU_IDENTITAS FROM kartu_identitas";
                                            $result = mysqli_query($connect, $query);

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<option value="' . $row['NAMA_KARTU_IDENTITAS'] . '">' . $row['NAMA_KARTU_IDENTITAS'] . '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <small>Nomor Identitas</small>
                                    <input class="form-control" type="text" name="nomor_identitas"
                                        placeholder="Nomor Identitas" required><br>
                                </div>
                            </div>

                            <small>Username</small>
                            <input class="form-control" type="text" name="username" placeholder="Username" required><br>

                        </div>

                        <div class="col-md-6">
                            <small>Nama Belakang</small>
                            <input class="form-control" type="text" name="nama_belakang" placeholder="Nama Belakang"
                                required>

                            <div class="py-4">
                                <small>Negara</small>
                                <select class="form-select" name="jenis_identitas">
                                    <?php
                                        include 'connect.php';

                                        $query = "SELECT NAMA_NEGARA FROM tbl_negara";
                                        $result = mysqli_query($connect, $query);

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['NAMA_NEGARA'] . '">' . $row['NAMA_NEGARA'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div>
                                <small>Tanggal Lahir</small><br>
                                <input class="form-control" type="date" name="date">
                            </div>

                            <div class="row pt-4">
                                <div class="col-6">
                                    <small>Kode Negara</small>
                                    <input class="form-control" type="text" name="kode_negara" placeholder="Kode Negara"
                                        required><br>
                                </div>

                                <div class="col-6">
                                    <small>Nomor Handphone</small>
                                    <input class="form-control" type="text" name="nomor_handphone"
                                        placeholder="Nomor Handphone" required><br>
                                </div>
                            </div>

                            <div>
                                <small>Foto</small>
                                <input type="file" class="form-control" name="foto" accept=".png, .jpeg, .jpg" />
                            </div>

                            <div class="pt-4">
                                <small>Password</small>
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    required><br>
                            </div>

                        </div>

                        <div class="text-center pt-2">
                            <input type="submit" name="register" class="btn btn-success col-md-4" value="Register">
                        </div>
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