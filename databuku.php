<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fathi</title>
</head>
<body>
    <a href="formbuku.html">Tambah Buku</a>
    <table border="1 px solid">
        <tr>
        <th>ID Buku</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
        </tr>
        <?php foreach(tampilbuku() as $row) { ?>
            <tr>
                <td><?= $row['id_buku']?></td>
                <td><?= $row['judul_buku']?></td>
                <td><?= $row['penulis']?></td>
                <td><?= $row['penerbit']?></td>
                <td><?= $row['tahun_terbit']?></td>
                <td><?= $row['harga']?></td>
                <td class="center-align">
                    <a href="formeditbuku.php?id_buku=<?= $row ['id_buku']?>" >Edit</a>
                    <a href="deletebuku.php?id_buku=<?= $row['id_buku']?>" ?>Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>