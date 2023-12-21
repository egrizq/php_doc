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
                        <a class="nav-link" style="color:blue;" href="manage.php">Lihat Data</a>
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
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <table class="table text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Option</th>
                    </tr>

                    <?php
            
                include 'connect.php';
                
                $no = 1;
                $query = "SELECT * FROM tbl_register";
                $result = mysqli_query($connect, $query);
            
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <!-- <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Update </a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete </a>
                        </td> -->
                    </tr>
                    <?php
                };
                ?>
                </table>

                <div style="padding-top: 10px;" class="text-center">
                    <button onclick="register()" name="register" class="btn btn-warning"> Register </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function register() {
        window.location.href = 'register.html'
    }
    </script>

    <script src="boostrap/js/jquery.js"></script>
    <script src="boostrap/js/popper.js"></script>
    <script src="boostrap/js/bootstrap.js"></script>

</body>

</html>