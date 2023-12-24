<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Kamar Hotel</title>
    <link rel="stylesheet" href="styleuser.css">
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Kamar Hotel</h2>
        <form action="proses_pemesanan.php" method="post">
            <label for="nama_cust">Nama : </label>
            <input type="text" id="nama_cust" name="nama_cust" required>
            <br>
            <label for="tanggal_checkin">Tanggal Check-in : </label>
            <input type="date" id="tanggal_checkin" name="tanggal_checkin" required>
            <br>
            <label for="jumlah_hari">Jumlah Hari : </label>
            <input type="integer" id="jumlah_hari" name="jumlah_hari" required>
            <br>
            <label for="tipe_kamar">Tipe Kamar : </label>
            <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="Single Room">Single Room</option>
                <option value="Double Room">Double Room</option>
                <option value="Suite Room">Suite Room</option>
            </select>
            <br>
            <input type="submit" value="Submit">
            <br>
            <a href="login.php">Back</a>
            <br>
        </form>
    </div>
</body>
</html>