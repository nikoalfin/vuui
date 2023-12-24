<?php
    $conn = mysqli_connect("localhost", "root", "", "uaspbd");
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    } 
?>