<?php

    require'koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
        $asalsma = $_POST['asalsma'];
        $matkulfav = $_POST['matkulfav'];

        $query = "UPDATE student SET nrp='$nrp',nama='$nama',jeniskelamin='$jeniskelamin',jurusan='$jurusan',email='$email',alamat='$alamat',nohp='$nohp',asalsma='$asalsma',matkulfav='$matkulfav' WHERE id='$id'";

        $sql = mysqli_query($conn,$query);

        if($sql){
            echo "<script>
            alert('Data berhasil diupdate');
            document.location.href = 'index.php';
            </script>";
        }else{
            echo $query;
        }
        
    }