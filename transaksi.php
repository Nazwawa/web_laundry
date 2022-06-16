<br>
<br>
<a class="btn" href="?page=add_transaksi"><i class="fas fa-plus"></i><b>Add Data</b></a>
	<br>
	<br>
	<table class="table-view"  border="1">
		<thead>	
			<tr>
				<td>No</td>
				<td>Tanggal & Waktu Masuk</td>
				<td>Nomor Transaksi</td>
				<td>Nama Konsumen</td>
				<td>Paket</td>
				<td>Berat/Kg</td>
				<td>Harga/Kg</td>
				<td>Grand Total</td>
				<td>Action</td>
			</tr>	
		</thead>
		<tbody>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT * FROM transaksi");
			while($d = mysqli_fetch_array($data)){
				?>
				
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['tgl_masuk']; ?></td>
					<td><?php echo $d['no_transaksi']; ?></td>
					<td><?php echo $d['nama_konsumen']; ?></td>
					<td><?php echo $d['paket']; ?></td>
					<td><?php echo $d['berat']; ?></td>
					<td><?php echo $d['harga_kg']; ?></td>
					<td><?php echo $d['grand_total']; ?></td>
					<td>
						<center>
						<a href="?page=edit_transaksi&id=<?php echo $d['no_transaksi']; ?>"><i class="fas fa-edit"></i></a>
						<a href="hapus(transaksi).php?id=<?php echo $d['no_transaksi']; ?>"><i class="fas fa-trash-alt"></i></a>
						<a href="struk.php?id=<?php echo $d['no_transaksi']; ?>"><i class="fas fa-print"></i></a>
			            </center>
					</td>
				</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
	