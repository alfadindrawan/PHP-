<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat']; 
$tgl = $_POST['tgl'];
$umur = $_POST['umur'];
$asal = $_POST['asal'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];
$biodata = mysqli_query($koneksi,"update biodatadiri set 
nim='$nim',nama='$nama',tempat='$tempat',tgl='$tgl',umur='$umur',asal='$asal',fakultas='$fakultas',jurusan='$jurusan' where nim='$nim'"); 

 
header("location: index.php");
?>