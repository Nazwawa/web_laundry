<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_konsumen = $_POST['nama_konsumen'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$data = mysqli_query($koneksi,"SELECT * FROM konsumen WHERE kode_konsumen='$id'");

// update data ke database
mysqli_query($koneksi,"UPDATE konsumen SET nama_konsumen ='$nama_konsumen', alamat ='$alamat', no_hp ='$no_hp' WHERE kode_konsumen='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=konsumen");
 
?>