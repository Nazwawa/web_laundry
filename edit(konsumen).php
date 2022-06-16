<br>
	<a href="?page=konsumen"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM konsumen where kode_konsumen='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form method="post" action="update(konsumen).php">
	<div class="tambah">
	    <h2 class="text-center">Edit Data Konsumen</h2>		
			<label>Nama Konsumen</label>
			<input type="hidden" name="id" value="<?php echo $d['kode_konsumen']; ?>">
			<input type="text" name="nama_konsumen" value="<?php echo $d['nama_konsumen']; ?>">
					
			<label>Alamat</label>
			<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
				
			<label>Nomor Handphone</label>
			<input type="number" name="no_hp" value="<?php echo $d['no_hp']; ?>">

			<input class="btn2" type="submit" value="Update">
				
	</div>
    </form>
		<?php 
	}
	?>
 