<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_peminjaman = $_POST['id_peminjaman'];
$nama_anggota = $_POST['nama_anggota'];
$judul_buku = $_POST['judul_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into peminjaman values('$id_peminjaman','$nama_anggota','$judul_buku','$tgl_pinjam',''$tgl_kembali'')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>