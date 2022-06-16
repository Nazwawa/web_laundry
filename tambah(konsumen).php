<a href="?page=konsumen"><i class="fas fa-arrow-circle-left"></i><b>Kembali</b></a>
	<br>
	<br>
    <form method="post" action="tambahkan(konsumen).php">
    <div class="tambah">
        <h2 class="text-center">Form Tambah Konsumen</h2>
        <label>Kode Konsumen</label>
        <input type="number" name="kode_konsumen" required>

        <label>Nama Konsumen</label>
        <input type="text" name="nama_konsumen" required>

        <label>Alamat</label>
        <input type="text" name="alamat" required>

        <label>Nomor Handphone</label>
        <input type="number" name="no_hp" placeholder="+62" required>

        <input class="btn2" type="submit" value="Simpan">
    </div>
    </form>