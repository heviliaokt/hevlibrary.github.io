<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Anggota</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 24px;">
    <h1 align="center">Data Anggota</h1>
    <table align="center" cellspacing="0" width="80%" style="margin: auto; margin-top: 24px;">
    <form action="simpan-edit-anggota.php" method="post">
            <tr>
                <td colspan="2"><h2 align="center">Edit Anggota</h2></td>
            </tr>
            <?php
                $id_anggota = $_GET['edit_anggota'];
                $q = mysqli_query($koneksi,"select * from anggota where id_anggota='$id_anggota'");
                $a = mysqli_fetch_array($q);
            ?>
            <tr>
                <td>ID Anggota</td>
                <td><input type="number" name="id_anggota" class="input" value="<?= $a['id_anggota']?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama_anggota" class="input" value="<?= $a['nama_anggota']?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" class="input" value="<?= $a['tgl_lahir']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                <select name="jk" class="input">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="text-area" name="alamat"></textarea></td>
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
            <th>No. Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
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