<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['id_user'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$user = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    </style>
</head>
<body>

<div class="navbar">
    <a href="index.php">Todo</a>
    <div>
        <a href="profil.php">Profil</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <div class="profil-card">
        <h3>Profil Saya</h3>

        <p><strong>Nama:</strong> <?= $user['name']; ?></p>
        <p><strong>Username:</strong> <?= $user['username']; ?></p>
        <p><strong>Email:</strong> <?= $user['email']; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?= $user['birth_date']; ?></p>

    </div>
</div>

</body>
</html>
