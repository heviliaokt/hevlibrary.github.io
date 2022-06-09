<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$no_buku = $_POST['no_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$foto_buku = $_POST['foto_buku'];
 
// update data ke database
mysqli_query($koneksi,"update buku set judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', foto_buku='$foto_buku' where no_buku='$no_buku'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>