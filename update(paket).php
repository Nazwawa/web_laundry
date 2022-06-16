<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];
$data = mysqli_query($koneksi,"SELECT * FROM paket WHERE kode_paket='$id'");

// update data ke database
mysqli_query($koneksi,"UPDATE paket SET nama_paket ='$nama_paket', harga ='$harga' WHERE kode_paket='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=paket");
 
?>