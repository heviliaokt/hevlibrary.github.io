<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 24px;">
    <h1 align="center">Data Buku</h1>
    <table align="center" cellspacing="0" width="80%" style="margin: auto; margin-top: 24px;">
    <form action="simpan-buku.php" method="post">
            <tr>
                <td colspan="2"><h2 align="center">Tambah Buku</h2></td>
            </tr>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="no_buku" class="input" placeholder="Masukkan ID Buku"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" class="input" placeholder="Masukkan Judul Buku"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" class="input" placeholder="Masukkan Penulis Buku"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" class="input" placeholder="Masukkan Penerbit Buku"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit" class="input" placeholder="Masukkan Tahun Terbit Buku"></td>
            </tr>
            <tr>
                <td>Foto Buku</td>
                <td><input type="file" name="foto_buku" class="input" value="Masukkan Gambar Buku"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-botton: 16px;">
                    <input type="reset" class="submit" value="Reset">

                    <input type="submit" class="submit" value="Tambah">

                    <a href="laporan_buku.php" class="submit right" style="text-decoration: none;">Cetak</a>
                </td>
            </tr>
        </form>
    </table>
    <div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
            <th>No.</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Foto Buku</th>
            <th>Action</th>
        </tr>
            <?php
                $q = mysqli_query($koneksi,"select * from buku");
                $no = 1;
                while($a = mysqli_fetch_array($q)){
            ?>
        <tr>
            <td style="text-align: center"><?= $no?></td>
            <td style="text-align: center"><?= $a['id_buku']?></td>
            <td style="text-align: center"><?= $a['judul_buku']?></td>
            <td style="text-align: center"><?= $a['penulis']?></td>
            <td style="text-align: center"><?= $a['penerbit']?></td>
            <td style="text-align: center"><?= $a['tahun_terbit']?></td>
            <td style="text-align: center"><?= "<img src='images/$a[foto_buku]' width='70' height='90' />";?></td>
            <td style="text-align: center;"><a href="?edit_buku=<?=$a['id_buku']?>">Edit</a></td>
        </tr>
        <?php
            $no++;
            } 
        ?>
    </table>
    </div>
</div>
</body>
</html>