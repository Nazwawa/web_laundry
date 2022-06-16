<head>
 <title>LOGIN PHP</title>
 <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <h1>LOGIN</h1>
  <p class="tulisan_atas">Silahkan Masuk</p>
  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">
   <div class="signup">Belum daftar?
        <a href="tambah(login).php" style="color:#7FA1DC">Daftar sekarang</a>
   
  </form>
 </div>
</body>
</html>