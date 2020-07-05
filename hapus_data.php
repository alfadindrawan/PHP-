<?php
    include_once ("koneksi.php");

    $nim= $_GET['nim'];

    $query="DELETE from biodatadiri where nim=$nim";

    $hasil=mysqli_query($koneksi,$query);

    if($hasil){
        header('Location: index.php');
    }else {
        echo "Hapus data gagal";
    }
    
