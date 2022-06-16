 <h1>Ini halaman <?php echo $_SESSION['jenis_user']; ?></h1>
 
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['jenis_user']; ?></b>.</p>
 <br>
 <br>
<?php 

	IF($_SESSION['jenis_user'] == 'admin'){
		
?>
<table  class="table-view"  border="1">
		<thead>
			
			<tr>
				<td>No</td>
				<td>Password</td>
				<td>Nama Pengguna</td>
				<td>Username</td>
				<td>Action</td>
			</tr>	
		</thead>
		<tbody>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT * FROM user");
			while($d = mysqli_fetch_array($data)){
				?>
				
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['nama_user']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td>
                    <center>
                    <a href="?page=edit_user&id=<?php echo $d['id_user']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="hapus(user).php?id=<?php echo $d['id_user']; ?>"><i class="fas fa-trash-alt"></i></a>

                    </center>
					</td>
				</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
<?php
}else{
?>
<table  class="table-view"  border="1" width="400px">
		<thead>
			
			<tr>
				<td>No</td>
				<td>Nama Pengguna</td>
				<td>Username</td>
			</tr>	
		</thead>
		<tbody>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT * FROM user");
			while($d = mysqli_fetch_array($data)){
				?>
				
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama_user']; ?></td>
					<td><?php echo $d['username']; ?></td>
					
				</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
<?php	
}
?>
 <br/>
 <br/>