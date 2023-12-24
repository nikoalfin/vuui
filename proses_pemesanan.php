
<?php
    include 'connection.php';
    if (isset($_POST['submit'])){
        $nama_cust = $_POST['nama_cust'];
        $tanggal_checkin = $_POST['tanggal_checkin'];
        $jumlah_hari = $_POST['jumlah_hari'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $sql="INSERT INTO pemesanan (nama_cust, tanggal_checkin, jumlah_hari, tipe_kamar) VALUES
        ('$nama_cust', '$tanggal_checkin', '$jumlah_hari', '$tipe_kamar')";

    if(mysqli_query($conn, $sql)){
        header('location: pemesanan.php');
    }else{
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>

