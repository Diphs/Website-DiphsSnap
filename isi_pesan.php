<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snap it, Send it, Vanish it! - DiphsSnap</title>
</head>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar">
                <div class="navbar-logo">
                    <a href="index.php">Diphs<span>Snap</span></a>
                </div>
                <div class="navbar-text">
                    <p>Kirim pesan dengan aman, satu catatan yang menghilang pada satu waktu bersama DiphsSnap.</p>
                </div>
            </nav>
        </div>
    </header>

    <div class="container-konfirmasi">
        <h2>Pesan ini untukmu :</h2>
        <div class="input-pesan">
            <textarea name="message" placeholder="Tulis Pesanmu..." required></textarea>
        </div>
        <form action="">
        <input type="submit" value="Balas dengan Pesan Rahasia Lainnya" class="btn-pesan">
        </form>
    </div>

</body>
</html>