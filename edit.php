<html>
<head>
    <title>Database</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    
    <h1 align="center" class="display-4">Edit Persediaan</h1><br>
        
    <?php 
    include "connection.php";
    $id = $_GET['id'];
    $query = mysqli_query($connect, "select * from barang where id='$id'");
    $output = mysqli_fetch_array($query);
    ?>
    <center><form action="update.php" method="post">
    <table class="col-sm-5">
        <tr>
            <td> <h5 class="display-5 text-black">ID Barang</h5> </td>
            <td> <input class="form-control form-control" type="hidden" name="id" value="<?php echo $output['id'];?>"> </td>
        </tr>
        <tr>
            <td> <h5 class="display-5 text-black">Nama Barang</h5> </td>
            <td> <input class="form-control form-control" type="text" name="nama" value="<?php echo $output['nama'];?>"> </td>
        </tr>
        <tr>
            <td> <h5 class="display-5 text-black">Harga Barang</h5> </td>
            <td> <input class="form-control form-control" type="text" name="harga" value="<?php echo $output['harga'];?>"> </td>
        </tr>
        <tr>
            <td> <h5 class="display-5 text-black">Stock Barang</h5> </td>
            <td> <input class="form-control form-control" type="text" name="stok" value="<?php echo $output['stok'];?>"> </td>
        </tr>
       
        <tr align="center">
            <td colspan="2" > <br><br><button type="submit" class="btn btn-success mb-2">Simpan</button>
            <button type="reset" class="btn btn-secondary mb-2">Reset</button> 
            </td> 
        </tr>
    </table>
    </form>
    </center>
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>