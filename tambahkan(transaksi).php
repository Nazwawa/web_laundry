<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
date_default_timezone_set('Asia/Jakarta');
$no_transaksi = $_POST['no_transaksi'];
$nama_konsumen = $_POST['nama_konsumen'];
$paket = $_POST['paket'];
$berat = $_POST['berat'];
$price = mysqli_query($koneksi,"SELECT * FROM paket where kode_paket='$paket'");
while($r = mysqli_fetch_array($price)){
    $harga_kg = $r['harga'];
}
// $harga_kg = $_POST['harga_kg'];
$grand_total = $berat * $harga_kg;
$tgl_masuk = date("Y-m-d H:i:s");
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO transaksi (`tgl_masuk`, `no_transaksi`, `nama_konsumen`, `paket`, `berat`, `harga_kg`, `grand_total`) VALUES ('$tgl_masuk','$no_transaksi','$nama_konsumen','$paket','$berat','$harga_kg', '$grand_total')");

// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=transaksi");
 
?>