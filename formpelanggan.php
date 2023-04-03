<?php
require "koneksi.php";

// $id_pelanggan = $_GET['id_pelanggan'];
$id_pelanggan = $_GET['id_pelanggan'] ?? 0;
// $id_pelanggan = !empty($_GET['id_pelanggan']) ? $_GET['id_pelanggan'] : 0;

if ($id_pelanggan > 0 ) {
    $row = tambahpelanggan($id_pelanggan);
    $id_pelanggan = $row['id_pelanggan'];
    $nama_customer = $row['nama_customer'];
    $alamat = $row['alamat'];
    $email = $row['email'];
    $no_hp = $row['no_hp'];
    $form_action = "aksi.php?aksi=update_customer";
    $title = "Edit Data Pelanggan";
} else {
    $id_pelanggan = '';
    $nama_customer = '';
    $email = '';
    $no_hp = '';
    $form_action = "aksi.php?aksi=tambahpelanggan";
    $title = "Tambah Data Pelanggan";
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Penjualan</title>
    <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
</head>

<body>
<nav>
    <ul>
        <li><a href="welcome.php">Beranda</a></li>
        <li><a href="databuku.php">Data Buku</a></li>
        <li><a href="datapelanggan.php">Data Pelanggan</a></li>
        <li><a href="datatransaksi.php">Data Transaksi</a></li>
    </ul>
</nav>
    <h2> Edit Data Pelanggan </h2>
    <form action="<?=$form_action?>" method="post">
        <input type="hidden" name="id_pelanggan" value="<?=$id_pelanggan?>" required/>
        <label for="nama_customer">Nama Customer</label>
        <input type="text" id="nama_customer" name="nama_customer" value="<?=$nama_customer?>" required/><br>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?=$alamat?>" required/><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=$email?>" required/><br>
        <label for="no_hp">No. HP</label>
        <input type="text" id="no_hp" name="no_hp" value="<?=$no_hp?>" required/><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html> 