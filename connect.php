<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "tugaspbw1";
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    
    if ($conn->connect_error){
        die("Koneksi gagal:" . " " . $conn->connect_error);
    }
?>