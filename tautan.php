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

    <div class="container-tautan">
        <p>Bagikan Tautan ini:</p>
        <div class="fill-tautan">
            <p>http://DiphsSnap/Pesan?kadnueiqy9813unlandnjkakudad</p>
        </div>
        <p>Pesan Rahasia</p>
        <div class="input-pesan">
            <textarea name="message" placeholder="Tulis Pesanmu..." required></textarea>
        </div>
        <p>Masa berlaku: 7 Hari (2023-11-30)</p>
        <form action="">
            <input type="submit" value="Hapus Pesan" class="btn-hapus">
        </form>
        <div class="label-pesan">
            <p>"Menekan “Hapus Pesan” akan menghapus pesan sebelum dibaca"</p>
        </div>
        <input type="submit" value="Buat Pesan Rahasia Lainnya" class="btn-pesan">
    </div>

    <div class="container-email">
    <form action="#">
        <div class="email-pesan">
            <input type="text" name="name" class="input-email" placeholder="Kirim pertanyaan atau komentar disini" required>
        </div>
        <input type="submit" value="Kirim" class="btn-email">
    </form>
    </div>
</body>
</html>