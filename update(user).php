<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user ='$id'");

// update data ke database
mysqli_query($koneksi,"UPDATE user SET password ='$password', nama_user ='$nama_user', username ='$username' WHERE id_user='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=users");
 
?>