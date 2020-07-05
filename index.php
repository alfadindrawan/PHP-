<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" type="text/css" href="style_form.css">    
    <title>DATABASE</title>
</head>
<body>
  
<div class=text>
<h1 align="center">DATABASE</h1>
</div>

<div class=text2>
    <h3 align="center"><u>TABEL BIODATA</u></h3>
</div>
    
    
    <table border="1" width="1000" align="center">
        
     <tr> 
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat, Tgl lahir</th>
            <th >Umur</th>
            <th>Asal</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Opsi</th> 
        </tr>
        

        <?php 
        include 'koneksi.php';
        $no = 1;
        $biodata = mysqli_query($koneksi,"select *from biodatadiri");
        while($a = mysqli_fetch_array($biodata)){
            ?>
            <tr>
                <td align ="center"><?php echo $no++; ?></td>
                <td align ="center"><?php echo $a['nim']; ?></td>
                <td align ="center"><?php echo $a['nama']; ?>
                    <td align ="center"><?php echo $a['tempat']; ?>,
                <?php echo $a['tgl']; ?></td>
                <td align ="center"><?php echo $a['umur']; ?></td>
                <td align ="center"><?php echo $a['asal']; ?></td>
                <td align ="center"><?php echo $a['fakultas']; ?></td>
                <td align ="center"><?php echo $a['jurusan']; ?></td>
                <td align ="center"><a href="form_update.php?nim=<?php echo $a['nim']; ?>">Edit</a>
                                    |
                                    <a href="hapus_data.php?nim=<?php echo $a['nim']; ?>">Hapus</a>
                                    |
                                    <a href="tampil_data.php?nim=<?php echo $a['nim']; ?>">Lihat</a>
                </td>
            </tr>
            
            <?php 
        }
        ?>
        
    </table>
    <button><a href="form_input.php">Tambah Biodata</a></button>
    
    </body>
    </html>
