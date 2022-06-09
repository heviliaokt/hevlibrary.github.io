<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hev Library</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="x-icon" href="images/logo.png">
</head>
<body>
<div class="container">
    <div class="kiri">
        <ul>
            <a href="index.php?act=buku"><li>Buku</li></a>
            <a href="index.php?act=anggota"><li>Anggota</li></a>
            <a href="index.php?act=peminjaman"><li>Peminjaman</li></a>
            <a href="index.php?act=logout"><li>Logout</li></a>
        </ul>
    </div>
    <div class="kanan">
        <div class="hal">
            <?php
                if(isset($_GET['act'])){
                    if($_GET['act'] == 'buku')
                        include 'buku.php';
                    else
                        if($_GET['act'] == 'peminjaman')
                        include 'peminjaman.php';
                    else
                        if($_GET['act'] == 'anggota')
                        include 'anggota.php';
                    else
                        if($_GET['act'] == 'logout')
                        include 'logout.php';
                } else if(isset($_GET['edit_buku'])){
                    include 'edit_buku.php';
                } else if(isset($_GET['edit_anggota'])){
                    include 'edit_anggota.php';
                } else include 'depan.php';
            ?>
        </div>
    </div>
</div>
</body>
</html>