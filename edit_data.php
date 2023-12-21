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
        <div class='row'>
            <div class='col-2'></div>

            <div class='col-8'>
                <h3 class='text-center'>Edit Profile</h3>

                <form method="post" action="update.php">
                    <div class='row'>
                        <div class='col-6'>
                            <!-- Include a hidden input field for the 'id' -->
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <small>Username</small>
                            <input class="form-control" type="text" name="username"
                                value="<?php echo $row['username']; ?>" required>
                            <small>Password</small>
                            <input class="form-control" type="password" name="password"
                                value="<?php echo $row['password']; }?>" required><br>
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