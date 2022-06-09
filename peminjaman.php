<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 24px;">
    <h1 align="center">Data Peminjaman</h1>
    <table align="center" cellspacing="0" width="70%" style="margin: auto; margin-top: 24px;">
    <form action="simpan-peminjaman.php" method="post">
            <tr>
                <td colspan="2"><h2 align="center">Tambah Peminjaman</h2></td>
            </tr>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_peminjaman" class="input" placeholder="Masukkan ID Peminjaman"></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama_anggota" class="input" placeholder="Masukkan Nama Anggota"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" class="input" placeholder="Masukkan Judul Buku"></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam" class="input" placeholder="Masukkan Tanggal Pinjam"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali" class="input" placeholder="Masukkan Tanggal Kembali"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-botton: 16px;">
                    <input type="reset" class="submit" value="Reset">

                    <input type="submit" class="submit" value="Tambah">

                    <a href="laporan_peminjaman.php" class="submit right" style="text-decoration: none;">Cetak</a>
                </td>
            </tr>
        </form>
    </table>
    <div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
            <th>No.</th>
            <th>ID Peminjaman</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Action</th>
        </tr>
            <?php
                $q = mysqli_query($koneksi,"select * from peminjaman");
                $no = 1;
                while($a = mysqli_fetch_array($q)){
            ?>
        <tr>
            <td style="text-align: center"><?= $no?></td>
            <td style="text-align: center"><?= $a['id_peminjaman']?></td>
            <td style="text-align: center"><?= $a['nama_anggota']?></td>
            <td style="text-align: center"><?= $a['judul_buku']?></td>
            <td style="text-align: center"><?= $a['tgl_pinjam']?></td>
            <td style="text-align: center"><?= $a['tgl_kembali']?></td>
            <td style="text-align: center;"><a href="?edit_peminjaman=<?=$a['id_peminjaman']?>">Edit</a></td>
        </tr>
        <?php
            } 
        ?>
    </table>
    </div>
</div>
</body>
</html>
<?php
    if (isset($_GET['konfirmasi'])) {
        $id_peminjaman = $_GET['konfirmasi'];
        $q = mysqli_query("update peminjaman set tgl_kembali='NOW()' where id_peminjaman='$id_peminjaman'");
        if($q)
        header("location:index.php");
    }
?>