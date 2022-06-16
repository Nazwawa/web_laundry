<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nama_user = $_POST['nama_user'];
$password = $_POST['password'];
$jenis_user = "user";
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO user (username, nama_user, password, jenis_user) VALUES ('$username','$nama_user','$password', '$jenis_user')");

// mengalihkan halaman kembali ke index.php
header("location:login.php");
 
?>