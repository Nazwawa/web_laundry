	<br>
	<a href="?page=transaksi"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi where no_transaksi='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form method="post" action="update(transaksi).php">
	<div class="tambah">
	    <h2 class="text-center">Edit Data Barang</h2>		
			<label>Nama Konsumen</label>
			<input type="hidden" name="id" value="<?php echo $d['no_transaksi']; ?>">
			<input type="text" name="nama_konsumen" value="<?php echo $d['nama_konsumen']; ?>">
					
			<!-- <label>Paket</label>
			<input type="text" name="paket" value="<?php echo $d['paket']; ?>"> -->

			<label>Jenis Paket</label>
				<?php
				$dropdown = mysqli_query($koneksi,"SELECT * FROM paket");
				?>

				<select name="paket" style="width:100%">  
                <option value="">Pilih</option>
				<?php
				while($r = mysqli_fetch_array($dropdown)){
					if ($r['kode_paket']==$d['paket']) {
						$select="selected";
					}else{
						$select="";
					}

					   echo "<option value=".$r['kode_paket']." $select>".$r['nama_paket']."</option>";
				}
				?>
				</select>
				
			<label>Berat</label>
			<input type="number" name="berat" value="<?php echo $d['berat']; ?>">

			<input class="btn2" type="submit" value="Update">
				
	</div>
    </form>
		<?php 
	}
	?>
 