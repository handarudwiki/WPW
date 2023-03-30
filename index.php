<?php

    require 'koneksi.php';
    $query = 'SELECT*FROM student';
    
    $sql = mysqli_query($conn,$query);

    $nomor = 1;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar bg-body-tertiary bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand">
                <h1>CRUD</h1>
            </a>
        </div>
    </nav>

    <div class="container">
    <a href="formtambah.php" class="btn btn-primary m-3">Tambah Data</a>
        
    <table class="table align-middle table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Asal SMA</th>
                <th>Matkul Favorit</th>
                <th>Aksi</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql)):
            ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $result['nrp']?></td>
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['jeniskelamin']?></td>
                    <td><?php echo $result['jurusan']?></td>
                    <td><?php echo $result['email']?></td>
                    <td><?php echo $result['alamat']?></td>
                    <td><?php echo $result['nohp']?></td>
                    <td><?php echo $result['asalsma']?></td>
                    <td><?php echo $result['matkulfav']?></td>
                    <td> 
                        <a href="formupdate.php?update=<?php echo $result['id']; ?>" class="btn btn-success mb-3">Update</a>
                        <a href="proseshapus.php?hapus=<?php echo $result['id'];?> "   onclick="return confirm('Yakin mau menghapus data?')" class="btn btn-danger">Delete</a>
                </td>             
                   
                </tr>
            <?php
            $nomor++;
             endwhile;
             ?>
        </tbody>
    </table>
    </div>
  </body>
</html>