<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
  /* background-color: #CDB9E7; */
  background-color: #6287ff;
  padding: 7px 9px;
  color: #000000;
  padding: 16px;
  font-size: 18px;
  border: none;
  width: 100%;
  display: flexbox;
}

.dropdown:hover{
  /* background-color: #BA98E4; */
  background-color: #7B83E9;
  color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  color:black;
  background-color: #f9f9f9;
  width: 90%;
  padding: 25px 28px;
  z-index: 1;

}

.dropdown:hover .dropdown-content {
  display: block;
}

.header-dropdown{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
</style>
</head>
<body>
<h2>Informasi</h2>

<br>
<p>Silahkan dilihat</p>
<br>

<div class="dropdown">
  <div class="header-dropdown">
    <span>Apa arti dari Luce Laundry ? </span>
    <i class="fas fa-caret-down"></i>
  </div>
  <div class="dropdown-content">
  <p>
  luce : cahaya. <br>
  warna biru : diandalkan dan bertanggung jawab.<br>
  Jadi aplikasi laundry berbasis web ini diharapkan dapat selalu bersinar (laris), dapat diandalkan dan bertanggung jawab.
  </p>
  </div>
</div>
<br>
<br>
<div class="dropdown">
  <div class="header-dropdown">
    <span>Perbedaan admin dengan user biasa </span>
    <i class="fas fa-caret-down"></i>
  </div>
  <div class="dropdown-content">
  <p>
  1. Hanya admin yang dapat melihat password akun pada halaman users. <br>
  2. Hanya admin yang dapat mengedit dan menghapus akun pada halaman users. <br>
  3. Hanya admin yang dapat mengedit,menambahkan,dan menghapus data pada halaman paket.<br>
  4. Perbedaan jenis user pada pojok kanan atas.
  </p>
  </div>
</div>
<br>
<br>
<div class="dropdown">
  <div class="header-dropdown">
    <span>Ketentuan Laundry</span>
  <i class="fas fa-caret-down"></i>
  </div>
  <div class="dropdown-content">
  <p>
  1. Pengambilan cucian harus membawa nota. <br>
  2. Pekerjaan di lakukan sesuai jam kerja (08.00 - 17.00 Wib).<br>
  3. Laundry yang tidak diambil selama 1 bulan akan kami sumbangkan.
  </p>
  </div>
</div>
<br>
<br>
<div class="dropdown">
  <div class="header-dropdown">
    <span>Cara memesan laundry  </span>
    <i class="fas fa-caret-down"></i>
  </div>
  <div class="dropdown-content">
  <p>
  1. Klik konsumen <br>
  2. Isi data diri dengan mengklik add data  <br>
  3. Lalu isi form konsumen  <br>
  4. Dan klik simpan <br>
  5. Setelah itu klik yes agar langsung berada pada add transaksi  <br>
  6. isi form transaksi <br>
  7. Jika sudah, klik simpan  <br>
  8. Yang terakhir cetak struk (logo print) <br>
  </p>
  </div>
</div>
<br>
<br>
<div class="dropdown">
  <div class="header-dropdown">
    <span>Macam-macam paket laundry  </span>
    <i class="fas fa-caret-down"></i>
  </div>
  <div class="dropdown-content">
  <p>
  1. Cuci setrika <br>
  2. Cuci (tanpa setrika) <br>
  3. Setrika <br>
  4. Dry clean : jasa yang digunakan untuk membersikan jas,kebaya,boneka,sepatu dll <br>
  </p>
  </div>
</div>
</body>
</html>
