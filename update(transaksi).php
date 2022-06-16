<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_konsumen = $_POST['nama_konsumen'];
$paket = $_POST['paket'];
$berat = $_POST['berat'];
// $data = mysqli_query($koneksi,"SELECT * FROM transaksi where no_transaksi='$id'");
// 	while($d = mysqli_fetch_array($data)){
//         $harga = $d['harga/kg'];
//     }
$price = mysqli_query($koneksi,"SELECT * FROM paket where kode_paket='$paket'");
while($r = mysqli_fetch_array($price)){
    $harga = $r['harga'];
}

$grand_total = $berat * $harga;
 
// update data ke database
mysqli_query($koneksi,"UPDATE transaksi SET nama_konsumen ='$nama_konsumen', paket ='$paket', berat ='$berat', grand_total = '$grand_total', harga_kg='$harga' WHERE no_transaksi='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php?page=transaksi");
 
?>