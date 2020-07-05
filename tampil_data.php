<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="style.css">    
    <title>BIODATA</title>
</head>
<body>
<div class="field">
    <fieldset>
    <h2 align="center"><text>BIODATA</text></h2>
    <?php
    include 'koneksi.php';
    $nim= $_GET['nim'];
    $data= mysqli_query($koneksi, "select *from biodatadiri where nim='$nim'") or die(mysqli_error($koneksi));
    while($a = mysqli_fetch_array($data)){
        ?>
    <form method="post" action="lihat.php">
        <table  border="0" width="800" align="center" cellpadding="5" cellspacing="0" >
        <tr> 
            <td>NIM</td>
            <td> : </td>
            <td><input type="text" name="nim" value="<?=$nim;?>"readonly></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama" value="<?=$a['nama'];?>"readonly> </td>
        </tr>
        <tr> 
            <td>Tempat, Tgl lahir</td>
            <td> : </td>
            <td><input type="text" name="tempat" value="<?=$a['tempat'];?>" readonly>
                <input type="date" name="tgl" value="<?=$a['tgl'];?>"readonly></td>
        </tr>
        <tr> 
            <td>Umur</td>
            <td> : </td>
            <td><input type="number" name="umur" value="<?=$a['umur'];?>"readonly></td>
        </tr>
        <tr> 
            <td>Asal</td>
            <td> : </td>
            <td><input type="text" name="asal" value="<?=$a['asal'];?>"readonly></td>
        </tr>
        <tr> 
            <td>Fakultas</td>
            <td> : </td>
            <td><input type="text" name="fakultas" value="<?=$a['fakultas'];?>"readonly></td>
            
        </tr>
        <tr> 
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="jurusan" value="<?=$a['jurusan'];?>"readonly></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"> 
        <button><a href="index.php">KEMBALI</a></button></td>
</tr>
        </table>
    </form>
    </div>
    </fieldset>
    <button><a href="index.php"></a></button>
    <?php
       
    } 
    ?>
</body>
</html>
