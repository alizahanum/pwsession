<?php 
    session_start();
$query = new mysqli('localhost','root','','pelanggan');
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($query, "select * from admin where username='$username' and password='$password'") or die (mysqli_error($query));
$cek = mysqli_num_rows($data);
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:session.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>