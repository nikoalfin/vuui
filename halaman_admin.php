<?php
    require 'connection.php';
    $database = mysqli_query($conn, "SELECT * FROM pemesanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<div class="container">
    <h2>Data Pemesanan</h2>
    <form  method="post">
    <table style = "text-align:left ; border:1px solid; border-collapse:collapse;">
        <tr>
            <th style = "border:1px solid; padding:10px; text-align:center; background-color: #D3D3D3;">Nama</th>
            <th style = "border:1px solid; padding:10px; text-align:center; background-color: #D3D3D3;">Tanggal Check In</th>
            <th style = "border:1px solid; padding:10px; text-align:center; background-color: #D3D3D3;">Jumlah Hari</th>
            <th style = "border:1px solid; padding:10px; text-align:center; background-color: #D3D3D3;">Tipe Kamar</th>
            <th style = "border:1px solid; padding:10px; text-align:center; background-color: #D3D3D3;">Action</th>
        </tr>
    <?php
        $no=0;
        foreach ($database as $db){
        $no++;
    ?>
        <tr>
            <td style = "border:1px solid; padding:10px; text-align:center"><?=$db['nama_cust']?></td>
            <td style = "border:1px solid; padding:10px; text-align:center"><?=$db['tanggal_checkin']?></td>
            <td style = "border:1px solid; padding:10px; text-align:center"><?=$db['jumlah_hari']?></td>
            <td style = "border:1px solid; padding:10px; text-align:center"><?=$db['tipe_kamar']?></td>
            <td><a href="delete.php?id_pemesanan=<?=$db['id_pemesanan']?>" class="opsi-btn">Hapus</a>
            <a href="update.php?id_pemesanan=<?=$db['id_pemesanan']?>" class="opsi-btn">Update</a></td>
        </tr>

    <?php
        }
    ?>
    </table>
    <a href="login.php">Back</a>
    </form>
    </div>
</body>
</html>