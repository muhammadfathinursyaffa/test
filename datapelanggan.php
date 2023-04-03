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
    <a href="formpelanggan.php">Tambah Pelanggan</a>
    <table border="1 px solid">
        <tr>
        <th>ID Buku</th>
        <th>Nama Customer</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Hp</th>
        </tr>
        <?php foreach(tampilpelanggan() as $row) { ?>
            <tr>
                <td><?= $row['id_pelanggan']?></td>
                <td><?= $row['nama_customer']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['no_hp']?></td>
                <td class="center-align">
                    <a href="formeditpelanggan.php?id_buku=<?= $row ['id_pelanggan']?>" >Edit</a>
                    <a href="deletepelanggan.php?id_buku=<?= $row['id_pelanggan']?>" ?>Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>