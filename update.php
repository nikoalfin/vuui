<?php
require 'connection.php';

if (isset($_GET['id_pemesanan'])){
    $id_pemesanan = $_GET['id_pemesanan'];

    $result = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'");
    $db = mysqli_fetch_assoc($result);

    if (!$db){
        echo "Data tidak ditemukan!";
        exit;
    }
}else{
    echo "Pelanggan tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id_pemesanan = $_POST['id_pemesanan'];
        $nama_cust = $_POST['nama_cust'];
        $tanggal_checkin = $_POST['tanggal_checkin'];
        $jumlah_hari = $_POST['jumlah_hari'];
        $tipe_kamar = $_POST['tipe_kamar'];

        $sql = "UPDATE pemesanan SET nama_cust ='$nama_cust', tanggal_checkin ='$tanggal_checkin', jumlah_hari ='$jumlah_hari', tipe_kamar ='$tipe_kamar' WHERE  id_pemesanan ='$id_pemesanan'";

        if(mysqli_query($conn, $sql)){
            header('location: halaman_admin.php');
            echo "<script>alert('Data Berhasil DiUPDATE!');</script>";
        }else{
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="styleupdate.css">
</head>
<body>
    <div class="container">
    <h2>Update Data</h2>
        <form action="update.php?id_pemesanan=<?= $db['id_pemesanan']?>" method="post">
            
            <tr>
                <td><label for="id_pemesanan">ID Pemesanan : </label>
                </td>
                <td>
                    <input type="text" id="id_pemesanan" name="id_pemesanan" value="<?= $db['id_pemesanan']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_cust">Nama : </label>
                </td>
                <td>
                    <input type="text" id="nama_cust" name="nama_cust" value="<?= $db['nama_cust']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_checkin">Tanggal Check In : </label>
                </td>
                <td>
                    <input type="date" id="tanggal_checkin" name="tanggal_checkin" value="<?= $db['tanggal_checkin']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jumlah_hari">Jumlah Hari : </label>
                </td>
                <td>
                    <input type="integer" id="jumlah_hari" name="jumlah_hari" value="<?= $db['jumlah_hari']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tipe_kamar">Tipe Kamar : </label>
                </td>
                <td>
                    <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="Single Room">Single Room</option>
                <option value="Double Room">Double Room</option>
                <option value="Suite Room">Suite Room</option>
            </select>
                </td>
            </tr>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>