<?php 
    session_start();
$query = new mysqli('localhost','root','','pelanggan');
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($query, "insert into admin (username, password) values ('$username','$password')") or die (mysqli_error($query));
header("location:login.php?pesan=daftar");
?>