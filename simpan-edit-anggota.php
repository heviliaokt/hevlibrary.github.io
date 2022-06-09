<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update anggota set nama_anggota='$nama_anggota', tgl_lahir='$tgl_lahir', jk='$jk', alamat='$alamat' where id_anggota='$id_anggota'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>