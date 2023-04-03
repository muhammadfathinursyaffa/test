<?php

// fungsi koneksi ke database
function conn(){
$server = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$conn = mysqli_connect ($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Gagal koneksi ke database.')</script>");
} 
return $conn;
}

// fungsi buat namvhpilin buku
function tampilbuku(){
    $conn = conn();
    $sql = "SELECT * FROM buku";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

// fungsi buat nambah buku
function tambahbuku($judul_buku, $penulis, $penerbit, $tahun_terbit, $harga){
    $conn = conn();
    $sql =  "INSERT INTO buku VALUES ('', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$harga')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

//  fungsi buat tampil customer
function tampilpelanggan(){
    $conn = conn();
    $sql = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

// fungsi buat nambah pelanggan
function tambahpelanggan($nama_customer, $alamat, $email, $no_hp){
    $conn = conn();
    $sql = "INSERT INTO pelanggan VALUES('', '$nama_customer', '$alamat', '$email', '$no_hp')";
    $result = mysqli_query($conn, $sql);
    return $result;
}
?>