<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:login.php?pesan=belum_login");
    }
?>
<html>
<head>
    <title>Halaman Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar navbar-light" style="background-color: #e3f2fd;" href="#">
<?php
     echo "Selamat datang ", $_SESSION['username'];
    ?>
</a>
</nav>
    <?php
     echo "Selamat datang ", $_SESSION['username'];
    ?>
    <br>
    <a href="logout.php">Logout</a>
   
    <h1 align="center" class="display-4">Data Toko Pak Sokin</h1><br>
        
<center><div class="col-sm-7"><table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stock Barang</th>
        <th scope="col">Opsi</th>
     
    </tr>
  </thead>
         <?php 
           
            include "connection.php";
            $query = mysqli_query($connect, "select * from barang");
            while($output = mysqli_fetch_array($query)) {
        ?>
  <tbody><div class="black-text">
    <tr>
      
      <td><h6 class="display-5 text-black"><?php echo $output['nama']; ?></h6></td>
      <td><h6 class="display-5 text-black"><?php echo $output['harga']; ?></h6></td>
      <td><h6 class="display-5 text-black"><?php echo $output['stok']; ?></h6></td>
     
      <td>
        <a type="button" class="btn btn-primary btn-sm" href=edit.php?id=<?php echo $output['id'];?> >Edit</a>
        <a type="button" class="btn btn-Danger btn-sm" href=hapus.php?id=<?php echo $output['id'];?> >Hapus</a></td>
    </tr>
    <?php } ?>
      </div>
  </tbody>
</table></div>
    <form action="forminput.php" method "post">
     <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="tambah"></td>
                </tr> 
        </form>
    </center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
</body>
    
</html>