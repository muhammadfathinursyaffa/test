<?php
require 'koneksi.php';
$aksi = $_GET['aksi'];

switch($aksi){
    case 'tambahbuku':
        $judul_buku =$_POST ['judul_buku'];
        $penulis =$_POST ['penulis'];
        $penerbit =$_POST ['penerbit'];
        $tahun_terbit =$_POST ['tahun_terbit'];
        $harga =$_POST ['harga'];
        $result = tambahbuku($judul_buku, $penulis, $penerbit, $tahun_terbit, $harga);
        if ($result){
            $msg = "Berhasil Tambah Buku";
            $loc = "databuku.php";
        } else
        $msg = "Gagal Tambah Buku";
        $loc = "databuku.php";
    break;

    case 'tambahpelanggan':
        $nama_customer =$_POST ['nama_customer'];
        $alamat =$_POST ['alamat'];
        $email =$_POST ['email'];
        $no_hp =$_POST ['no_hp'];
        $result = tambahpelanggan($nama_customer, $alamat, $email, $no_hp);
        if ($result){
            $msg = "Berhasil Tambah Pelanggan";
            $loc = "datapelanggan.php";
        } else
        $msg = "Gagal Tambah Pelanggan";
        $loc = "datapelanggan.php";
    break;
}

if (!empty($msg)){
    echo "<script>
    alert('$msg');
    location.href = '$loc';
    </script>";
}
?>