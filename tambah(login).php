<head>
    <br>
 <title>Registrasi</title>
 <link rel="stylesheet" type="text/css" href="login.css">
 <script src="https://kit.fontawesome.com/a79e2598ea.js"></script>
</head>
<body>
<form method="post" action="tambahkan(login).php">
 <div class="panel_login panel_regis">
 <a href="login.php" class="signup" style="color:#7FA1DC"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
  <h1>Registrasi</h1>
  <p class="tulisan_atas">Silahkan Isi</p>
  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Masukkan username" required="required">

   <label>Nama</label>
   <input type="text" name="nama_user" class="form_login" placeholder="Masukkan nama" required="required">


   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">

   <!-- <label>Jenis User</label>
    <div class="input_grup">
    <p><input type="radio" name="jenis_user" value="admin">Admin</p>

    <p  class="ml-5"><input type="radio" name="jenis_user" value="user">User<br></p>
	</div> -->

   <input type="submit" class="tombol_login" value="Daftar">
   
  </form>
  
 </div>
</form>
</body>
</html>