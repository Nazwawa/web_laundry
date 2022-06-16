<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_konsumen = $_POST['kode_konsumen'];
$nama_konsumen = $_POST['nama_konsumen'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO konsumen (kode_konsumen,nama_konsumen,alamat,no_hp) VALUES('$kode_konsumen','$nama_konsumen','$alamat','$no_hp')");
 
echo '<script>
    if( confirm("Apakah Anda ingin melanjutkan transaksi?") ){
    console.log("Ya");
    window.location="tampilan.php?page=add_transaksi&nama='.$nama_konsumen.'";
}else{
    console.log("Tidak");
    window.location="tampilan.php?page=konsumen";
}

</script>';

// header("location:tampilan.php?page=add_transaksi&nama="+ $nama_konsumen;+"");
// mengalihkan halaman kembali ke index.php
// header("location:tampilan.php?page=konsumen");
 
?>