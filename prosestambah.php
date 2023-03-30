<?php

    require "koneksi.php";

    if(isset($_POST['submit'])){
        $nrp = $_POST['nama'];
        $nama = $_POST['nama'];
        $jeniskelamin = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
        $asalsma = $_POST['asalsma'];
        $matkulfav = $_POST['matkulfav'];

        $query = "INSERT INTO student values(null,'$nrp','$nama','$jeniskelamin','$jurusan','$email','$alamat','$nohp', '$asalsma','$matkulfav')";

        $sql = mysqli_query($conn,$query);

        if($sql){
            echo 
            "<script type ='text/JavaScript'>;  
                alert('Data berhasil ditambahkan');
                document.location.href='index.php';
           </script>";   

        }else{
            echo $query;
        }


    }