<?php
include "koneksi.php";

$category = mysqli_query($koneksi, "SELECT * FROM category");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <div class="navbar">
        <a href="index.php">TODOKU</a>
        <div>
            <a href="profil.php">Profil</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="header">
        <h2>Tambah Todomu!</h2>
    </div>

    <div class="form-container">
        <form action="proses_tambah.php" method="post">
            <label>Judul:</label>
            <input type="text" name="judul" placeholder="tambahkan judul" required><br><br>

            <label>Deskripsi:</label>
            <textarea name="deskripsi" id="" cols="30" placeholder="tambahkan deskripsi" required></textarea><br><br>

            <label>Kategori:</label>
            <select name="category" required>
                <option value="">Pilih Kategori</option>
                <?php while ($c = mysqli_fetch_assoc($category)) { ?>
                    <option value="<?=$c['id_category']?>">
                        <?=$c['category'];?>
                    </option>
               <?php } ?>
            </select><br><br>

            <label>Status</label>
            <select name="status" required>
            <option value="pending">Pending</option>
            <option value="done">Done</option>
            </select><br><br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>