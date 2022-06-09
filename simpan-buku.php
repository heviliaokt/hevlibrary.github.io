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
 
// menginput data ke database
mysqli_query($koneksi,"insert into buku values('$no_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit','$foto_buku')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>