<?php
include 'connection.php';
$id_pemesanan = $_GET['id_pemesanan'];
$sql = "DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id_pemesanan]'";

if(mysqli_query($conn, $sql)){
    header('location: halaman_admin.php');
    echo '<script>alert("Data Berhasil DiHAPUS!");</script>';
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>