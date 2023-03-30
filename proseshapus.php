<?php

    require"koneksi.php";

    if(isset($_GET['hapus'])){
        
        $id = $_GET['hapus'];

        $query = "DELETE FROM student where id = '$id'";
        $sql = mysqli_query($conn,$query);


        if($sql){
            echo 
            "<script type ='text/JavaScript'>;  
                alert('Data berhasil dihapus');
                document.location.href='index.php';
           </script>"; 

            //header("location:index.php");
        }else{
            echo $query;
        }



    }

?>