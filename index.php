<?php
    session_start();
    ob_start(); //menjalankan pengaturan agar bisa mengakses database

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) { //jika session username dan password kosong
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    } else {
        define('INDEX', true);  //menuju ke halaman index.php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Aplikasi Manajemen Pegawai
    </header>
    <div class="container">
        <aside> <!-- digunakan untuk menampilkan menu -->
            <ul class="menu">
                <li><a href="?hal=dashboard">Dashboard</a></li>
                <li><a href="?hal=pegawai">Data Pegawai</a></li>
                <li><a href="?hal=jabatan">Data Jabatan</a></li>
                <li><a href="?hal=nata">halo</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <?php include "konten.php" ?> <!-- digunakan untuk menampilkan konten -->
        </section>
    </div>
    <footer>
        Made with 🤝 + 🍻 = 💝 by <b>Kelompok 5 </b> 
    </footer>
</body>
</html>

<?php
} //menutup else pada baris 13
?>