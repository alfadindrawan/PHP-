<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="style.css">    
    <title>UPDATE</title>
</head>
<body>
<div class="field">
    <fieldset>
    <h2 align="center"><text>UPDATE BIODATA</text></h2>
    <?php
    include 'koneksi.php';
    $nim= $_GET['nim'];
    $data= mysqli_query($koneksi, "select *from biodatadiri where nim='$nim'") or die(mysqli_error($koneksi));
    while($a = mysqli_fetch_array($data)){
        ?>
    <form method="post" action="update.php">
        <table  border="0" width="800" align="center" cellpadding="5" cellspacing="0" >
        <tr> 
            <td>NIM</td>
            <td> : </td>
            <td><input type="text" name="nim" value="<?=$nim;?>" readonly></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama" value="<?=$a['nama'];?>"></td>
        </tr>
        <tr> 
            <td>Tempat, Tgl lahir</td>
            <td> : </td>
            <td><input type="text" name="tempat" value="<?=$a['tempat'];?>">
                <input type="date" name="tgl" value="<?=$a['tgl'];?>"></td>
        </tr>
        <tr> 
            <td>Umur</td>
            <td> : </td>
            <td><input type="number" name="umur" value="<?=$a['umur'];?>"></td>
        </tr>
        <tr> 
            <td>Asal</td>
            <td> : </td>
            <td><input type="text" name="asal" value="<?=$a['asal'];?>"></td>
        </tr>
        <tr> 
            <td>Fakultas</td>
            <td> : </td>
            <td><input type="text" name="fakultas" value="<?=$a['fakultas'];?>"></td>
            
        </tr>
        <tr> 
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="jurusan" value="<?=$a['jurusan'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"> 
        <input type="submit" value="SIMPAN"><br><button><a href="index.php">LIHAT DATA</a></button></td>
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
