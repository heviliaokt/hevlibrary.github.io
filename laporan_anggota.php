<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Anggota</title>
    <link rel="icon" type="x-icon" href="images/logo.png">
</head>
<body>
<div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
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
        </tr>
        <?php
            } 
        ?>
    </table>
    </div>
    <script>
		window.print();
	</script>
</body>
</html>