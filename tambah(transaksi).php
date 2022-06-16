<?php
include 'koneksi.php';
?>
 <a href="?page=transaksi"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
    <form method="post" action="tambahkan(transaksi).php">
	<div class="tambah">
		<h2 class="text-center">Form Tambah Transaksi</h2>
				<label>Nomor Transaksi</label>
				<input type="number" name="no_transaksi" required >
			
				<label>Nama Konsumen</label>
				<label>
				<input <?php if(isset($_GET['nama']))
				{
					echo 'readonly';
				} ?> type="text" value="<?php if(isset($_GET['nama']))
				{
					echo $_GET['nama'];
				} ?>" name="nama_konsumen" required ></label>
						
				<label>Jenis Paket</label>
				<?php
				$data = mysqli_query($koneksi,"SELECT * FROM paket");
				?>

				<select name="paket" style="width:100%">  
                <option value="">Pilih</option>
				<?php
				while($d = mysqli_fetch_array($data)){
				?>
                <option value="<?php echo $d['kode_paket']; ?>"><?php echo $d['nama_paket']." - Rp.". $d['harga'].'/Kg'?></option> 
				<?php } ?>
				</select>
		
				<label>Berat</label>
				<input type="number" name="berat" required >

				<!-- <label>Harga/Kg</label>
				<input type="number" name="harga_kg" required >		 -->
		        
                <input class="btn2" type="submit" value="Simpan">
	</div>
    </form>
	<br>
	