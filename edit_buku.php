<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 24px;">
    <h1 align="center">Data Buku</h1>
    <table align="center" cellspacing="0" width="80%" style="margin: auto; margin-top: 24px;">
    <form action="simpan-edit-buku.php" method="post">
            <tr>
                <td colspan="2"><h2 align="center">Ubah Buku</h2></td>
            </tr>
            <?php
                $id_buku = $_GET['edit_buku'];
                $q = mysqli_query($koneksi,"select * from buku where id_buku='$id_buku'");
                $a = mysqli_fetch_array($q);
            ?>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" class="input" value="<?= $a['id_buku']?>" readonly></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" class="input" value="<?= $a['judul_buku']?>"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" class="input" value="<?= $a['penulis']?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" class="input" value="<?= $a['penerbit']?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit" class="input" value="<?= $a['tahun_terbit']?>"></td>
            </tr>
            <tr>
                <td>Foto Buku</td>
                <td><input type="file" name="foto_buku" class="input" value="<?= $a['foto_buku']?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-botton: 16px;">
                    <input type="reset" class="submit" value="Reset">

                    <input type="submit" class="submit" value="Ubah">
                </td>
            </tr>
        </form>
    </table>
    <div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
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
                while($a = mysqli_fetch_array($q)){
            ?>
        <tr>
            <td style="text-align: center"><?= $a['id_buku']?></td>
            <td style="text-align: center"><?= $a['judul_buku']?></td>
            <td style="text-align: center"><?= $a['penulis']?></td>
            <td style="text-align: center"><?= $a['penerbit']?></td>
            <td style="text-align: center"><?= $a['tahun_terbit']?></td>
            <td style="text-align: center"><?= "<img src='images/$a[foto_buku]' width='70' height='90' />";?></td>
            <td style="text-align: center"><a href="?edit_buku=<?=$a['id_buku']?>">Edit</a></td>
        </tr>
        <?php
            } 
        ?>
    </table>
    </div>
</div>
</body>
</html>