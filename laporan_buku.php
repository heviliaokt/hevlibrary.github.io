<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Buku</title>
    <link rel="icon" type="x-icon" href="images/logo.png">
</head>
<body>
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
        </tr>
        <?php
            $no++;
            } 
        ?>
    </table>
    </div>
    <script>
		window.print();
	</script>
</body>
</html>