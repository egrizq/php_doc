<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

    include "connect.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM mydata WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
        
    while ($row = mysqli_fetch_array($result)) {
                ?>
    <div class="container-fluid" style="padding-top: 20vh;">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <p class="text-center h3">UPDATE</p>
                <form style="margin-top: 20px;" method="post" action="update.php">

                    <!-- Include a hidden input field for the 'id' -->
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <small>Username</small>
                    <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>"
                        required>
                    <small>Password</small>
                    <input class="form-control" type="password" name="password" value="<?php echo $row['password']; ?>"
                        required><br>
                    <input type="submit" class="btn btn-success col-md-12" value="Update">
                </form>
            </div>
        </div>
    </div>
    <?php
    };
    ?>


    <script src="css/js/jquery.js"></script>
    <script src="css/js/popper.js"></script>
    <script src="css/js/bootstrap.js"></script>
</body>

</html>