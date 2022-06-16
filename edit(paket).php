<br>
	<a href="?page=paket"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM paket where kode_paket='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form method="post" action="update(paket).php">
	<div class="tambah">
	    <h2 class="text-center">Edit Data Paket</h2>		
			<label>Nama Paket</label>
			<input type="hidden" name="id" value="<?php echo $d['kode_paket']; ?>">
			<input type="text" name="nama_paket" value="<?php echo $d['nama_paket']; ?>">
				
			<label>Harga/Kg</label>
			<input type="number" name="harga" value="<?php echo $d['harga']; ?>">

			<input class="btn2" type="submit" value="Update">
				
	</div>
    </form>
		<?php 
	}
	?>
 