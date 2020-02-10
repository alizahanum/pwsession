<html>
<head>
    <title>Login</title>
</head>
    <body>
    <h2>Login</h2>
    <br>
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "anda berhasil logout!";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "anda harus login!";
                }else if($_GET['pesan'] == "daftar"){
                    echo "daftar berhasil!";
                }
            }
        ?>
        <br><br>
        <center>
        <form method="post" action="cek_login.php">
            <table>
                <center>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Masukkan username"></td>
                </tr>   
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukkan password"></td>
                </tr>   
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="login"> <a href="register.php" role="button">Buat Akun</a> </td>
                </tr>  
                </center>
            </table>
        </form>
        </center>
    </body>
</html>