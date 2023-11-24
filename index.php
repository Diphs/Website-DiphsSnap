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

    <div class="container-pesan">
        <p>Pesan Rahasia</p>
        <form action="#">
            <div class="input-pesan">
                <textarea name="message" placeholder="Tulis Pesanmu..." required></textarea>
            </div>
            <p>Opsi Privasi</p>
            <div class="setting-pesan">
                <div class="drop-down">
                <label for="languages">Masa berlaku:</label>
                    <select id="languages" name="languages">
                    <option value="7">7 Hari dari sekarang</option>
                    <option value="3">3 Hari dari sekarang</option>
                    <option value="1">1 Hari dari sekarang</option>
                    <option value="12">12 Jam dari sekarang</option>
                    <option value="6">6 Jam dari sekarang</option>
                    <option value="3">3 Jam dari sekarang</option>
                    <option value="1">1 Jam dari sekarang</option>
                    <option value="30">30 Menit dari sekarang</option>
                    <option value="5">5 Menit dari sekarang</option>
                </select>
                </div>
                <div class="password-pesan">
                    <label for="">Password:</label>
                    <input type="text" name="name" class="input-password" placeholder="Masukan password untuk mengenkripsi pesan" required>
                </div>
            </div>
            <input type="submit" value="Buat Pesan Rahasia" class="btn">
        </form>
        <div class="label-pesan">
            <p>"Rahasia Terkirim, Keamanan Terjamin: DiphsSnap, Pengiriman Pesan yang Hancur dengan Gaya."</p>
        </div>
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