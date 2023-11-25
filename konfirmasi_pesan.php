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
        <div class="pesan-password">
            <h2>Masukan passowrd untuk melihat pesan :</h2>
            <form action="#">
                <div class="password-konfimasi">
                    <input type="text" name="name" class="input-passkonfirmasi" placeholder="Masukan Password disini" required>
                </div>
                <input type="submit" value="Lihat Pesan Rahasia" class="btn-konfirmasi">
            </form>
            <p>Kamu hanya bisa melihat pesan ini sekali!</p>
        </div>
        <div class="pesan-nopassword">
            <h2>Tekan untuk melihat pesan :</h2>
            <form action="#">
                <input type="submit" value="Lihat Pesan Rahasia" class="btn-konfirmasi">
            </form>
            <p>Kamu hanya bisa melihat pesan ini sekali!</p>
        </div>
    </div>

</body>
</html>