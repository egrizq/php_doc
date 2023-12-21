<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <a class="nav-link" style="color:blue;" href="manage.php">Lihat Data</a>
                    </li>
                </ul>

                <span class="navbar-text" style="color:black;">
                    Welcome | <?php echo $user["nama_depan"]; ?>
                </span>

                <span class="navbar-text">
                    <a class="nav-link" style="color:blue;" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <!-- <?php
        echo "<div class=text-center>" . "<h3> Selamat Datang, ". $user["nama_depan"] . "</h3>" . "</div";

        ?> -->

        <div class="row">
            <div class="col-1"></div>

            <div class="col-2"></div>

            <div class="col-6">
                <?php
            echo "<h3 class='pb-4'> Selamat Datang, ". $user["nama_depan"] . "</h3>";

            ?>
                <div class="row p-4 border">
                    <div class="col-5">
                        <?php
                            echo "<p>Nama ". "</p>";
                            echo "<p>Negara ". "</p>";
                            echo "<p>Kota ". "</p>";
                            echo "<p>Kode Pos " . "</p>";
                            echo "<p>Jenis Kelamin ". "</p>";
                            echo "<p>Nomor HP ". "</p>";
                            echo "<p>Tanggal Lahir ". "</p>";
                            echo "<p>Email ". "</p>";
                        ?>
                    </div>

                    <div class="col-1">
                        <?php
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";
                    echo "<p>" . ":". "</p>";

                ?>
                    </div>

                    <div class="col-6">
                        <?php
                    echo "<p>". ' ' . $user["nama_depan"] . ' ' . $user["nama_belakang"]. "</p>";
                    echo "<p>". ' ' . $user["negara"];
                    echo "<p>". ' ' . $user["kota"];
                    echo "<p>". ' ' . $user["kode_pos"];
                    echo "<p>". ' ' . $user["jenis_kelamin"];
                    echo "<p>". ' ' . $user["nomor_handphone"];
                    echo "<p>". ' ' . $user["tanggal_lahir"];
                    echo "<p>". ' ' . $user["email"];
        }
                mysqli_close($connect);
                ?>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="boostrap/js/jquery.js"></script>
    <script src="boostrap/js/popper.js"></script>
    <script src="boostrap/js/bootstrap.js"></script>
</body>

</html>