<html>
<head>
    <title>Database</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <h1 align="center" class="display-4">Input Barang</h1><br>
        
<?php 
include "connection.php";
$id;
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = mysqli_query($connect, "insert into barang values('','$nama','$harga','$stok')") or die(mysqli_error($connect));
if($query){
    echo "<center><h4>Proses Input Berhasil! Lihat Hasil <a href='session.php'> disini </a></h4></center>";
}else{
    echo "<center><h4>Proses Input Belum Berhasil! Lihat Hasil <a href='session.php'> disini </a></h4></center>";
}
?>
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>