<?php 
    $connect = new mysqli("localhost","root","","database");
    if($connect->connect_error){
        die('Maaf koneksi gagal : '. $try->error);
    }
?>