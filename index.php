<?php
include "koneksi.php";
$sql = "SELECT * FROM sayur";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SAYUR</h1>
    <a href="tambah.php">Tambah</a>
    <table border="1">
     <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
     </tr>
     <?php while ($sayur = mysqli_fetch_assoc($query)){ ?>
    <tr>
        <td><?=$sayur['no']?></td>
        <td><?=$sayur['nama']?></td>
        <td><?=$sayur['harga']?></td>
        <td>
            <a href="edit.php?no=<?=$sayur['no']?>">Edit</a> |
            <a href="hapus.php?no=<?=$sayur['no']?>">Hapus</a> 
        </td>
    </tr>
     <?php } ?>
    </table>
</body>
</html>