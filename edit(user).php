<br>
	<a href="?page=users"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM user where id_user='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form method="post" action="update(user).php">
	<div class="tambah">
	    <h2 class="text-center">Edit Data User</h2>		
			<label>Password</label>
			<input type="hidden" name="id" value="<?php echo $d['id_user']; ?>">
			<input type="text" name="password" value="<?php echo $d['password']; ?>">
					
			<label>Nama</label>
			<input type="text" name="nama_user" value="<?php echo $d['nama_user']; ?>">
				
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $d['username']; ?>">

			<input class="btn2" type="submit" value="Update">
				
	</div>
    </form>
		<?php 
	}
	?>
 