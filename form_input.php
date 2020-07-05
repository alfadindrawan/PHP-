<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="style.css">    
    <title>BIODATA</title>
</head>
<body>
<div class="field">
    <fieldset>
    <h2 align="center"><text>TAMBAH BIODATA</text></h2>
    <form method="post" action="input.php">
        <table  border="0" width="800" align="center" cellpadding="5" cellspacing="0" >
        <tr> 
            <td>NIM</td>
            <td> : </td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr> 
            <td>Tempat, Tgl lahir</td>
            <td> : </td>
            <td><input type="text" name="tempat">
                <input type="date" name="tgl"></td>
        </tr>
        <tr> 
            <td>Umur</td>
            <td> : </td>
            <td><input type="number" name="umur"></td>
        </tr>
        <tr> 
            <td>Asal</td>
            <td> : </td>
            <td><input type="text" name="asal"></td>
        </tr>
        <tr> 
            <td>Fakultas</td>
            <td> : </td>
            <td><input type="text" name="fakultas"></td>
            
        </tr>
        <tr> 
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"> 
        <input type="submit" value="Input Data"><br><button><a href="index.php">KEMBALI</a></button></td>
</tr>
        </table>
    </form>
    </div>
    </fieldset>
    <button><a href="index.php"></a></button>
</body>
</html>
