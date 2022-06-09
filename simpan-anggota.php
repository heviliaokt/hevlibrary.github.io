<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into anggota values('$id_anggota','$nama_anggota','$tgl_lahir','$jk','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>