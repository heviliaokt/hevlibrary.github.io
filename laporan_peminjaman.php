<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<head>
    <title>Laporan Peminjaman</title>
    <link rel="icon" type="x-icon" href="images/logo.png">
</head>
<body>
<div class="table">
    <table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
        <tr>
            <th>No.</th>
            <th>ID Peminjaman</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
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