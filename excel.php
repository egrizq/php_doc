<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
</head>

<body>
    <center>
        <h3>Export Data Ke Excel</h3>
    </center>

    <table border='1'>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Negara</th>
            <th scope="col">Kota</th>
            <th scope="col">Kode Post</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
        </tr>

        <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data.xls");
                        
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
        </tr>
        <?php
            };
        ?>
    </table>

    </div>
    </div>
    </div>
</body>

</html>