<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_paket = $_POST['kode_paket'];
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO paket (kode_paket,nama_paket,harga) VALUES ('$kode_paket','$nama_paket','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=paket");
 
?>