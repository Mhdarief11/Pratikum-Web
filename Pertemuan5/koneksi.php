<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_crud"

    $conn = new mysqli($host,$user,$pass, $dbname);

    if($conn->connect eror){
        die('Koneksi Gagal : ').$conn->connect eror);
    }
?>