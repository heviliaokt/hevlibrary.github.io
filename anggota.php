<!DOCTYPE html>
<html>
<head>
    <title>Anggota</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 24px;">
    <h1 align="center">Data Anggota</h1>
    <table align="center" cellspacing="0" width="80%" style="margin: auto; margin-top: 24px;">
    <form action="simpan-anggota.php" method="post">
            <tr>
                <td colspan="2"><h2 align="center">Tambah Anggota</h2></td>
            </tr>
            <tr>
                <td>ID Anggota</td>
                <td><input type="text" name="id_anggota" class="input" placeholder="Masukkan ID Anggota"></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama_anggota" class="input" placeholder="Masukkan Nama Anggota"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" class="input" placeholder="Masukkan Tanggal Lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk" class="input" placeholder="Pilih Jenis Kelamin">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="text-area" name="alamat" placeholder="Masukkan Alamat"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-botton: 16px;">
                    <input type="reset" class="submit" value="Reset">

                    <input type="submit" class="submit" value="Tambah">

                    <a href="laporan_anggota.php" class="submit right" style="text-decoration: none;">Cetak</a>
                </td>
            </tr>
        </form>
    </table>
    <div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
            <?php
                $q = mysqli_query($koneksi,"select * from anggota");
                while($a = mysqli_fetch_array($q)){
            ?>
        <tr>
            <td style="text-align: center"><?= $a['id_anggota']?></td>
            <td style="text-align: center"><?= $a['nama_anggota']?></td>
            <td style="text-align: center"><?= $a['tgl_lahir']?></td>
            <td style="text-align: center"><?= $a['jk']?></td>
            <td style="text-align: center"><?= $a['alamat']?></td>
            <td style="text-align: center"><a href="?edit_anggota=<?=$a['id_anggota']?>">Edit</a></td>
        </tr>
        <?php
            } 
        ?>
    </table>
    </div>
</div>
</body>
</html>