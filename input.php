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
$biodata = mysqli_query($koneksi,"insert into biodatadiri values
('$nim','$nama','$tempat','$tgl','$umur','$asal','$fakultas','$jurusan')"); 

 
header("location: index.php");

?>
