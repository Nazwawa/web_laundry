<html>
<head>
   <title>Struk</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'koneksi.php';
?>
 <div class="header">

    <div class="p1">
        <img src="laundry_logo.PNG" width="180" height="90">
        <p>LUCE <br> LAUNDRY</p>
    </div>

    <div class="p2">
        <p>Jl. Tajur No.xx <br>
        Bogor Timur <br>
        0812-xxxx-xxxx</p>
    </div>
</div>
<div class="pembatas"></div>
<br>
<div class="content">
    <div class="tabel1">
        <table>
        <?php
        $id = $_GET['id'];
		$data = mysqli_query($koneksi,"SELECT * FROM qw_struk WHERE no_transaksi = $id");
        while($d = mysqli_fetch_array($data)){
        ?>

            <tr>Nama : <?php echo $d['nama'];?> <br></tr>
            <tr>No. telp : <?php echo $d['no_hp'];?><br></tr>
            <tr>Alamat : <?php echo $d['alamat'];?> <br></tr>
            <tr>Tanggal dan waktu masuk : <?php echo $d['tgl_masuk'];?> 
            <br></tr>
            <tr>Tanggal selesai : - <br></tr>
        </table>
    </div>

    <div class="tabel2">
        <table>
            <tr>Nomor konsumen : <br> 
            <center>
            <?php echo $d['kode_konsumen'];?> </tr>
            </center>
        </table>
        <?php
        }
        ?> 
    </div>
</div>
<center>
    <table border="1" width= "900px">
        <th>No</th>
        <th>Jenis Layanan</th>
        <th>Harga/Kg</th>
        <th>Berat/Kg</th>
        <th>Jumlah</th>
    </tr>
<?php
$no = 1;
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE no_transaksi = $id");
while ($d = mysqli_fetch_array($data)){
?>
    <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $d['paket']; ?></td>
		<td><?php echo $d['harga_kg']; ?></td>
		<td><?php echo $d['berat']; ?></td>
		<td><?php echo $d['grand_total']; ?></td>
    </tr>
<?php 
}
?>
    </table>
<br> 
<table>
<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE no_transaksi = $id");
while ($d = mysqli_fetch_array($data)){
?>
        <tr font-size="30px"><b>Grand Total : <?php echo $d['grand_total'];?> </tr>
<?php 
}
?>
</table>
</center>
</body>
</html>