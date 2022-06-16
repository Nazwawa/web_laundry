<!DOCTYPE html>
<html>
<?php
 session_start();
 
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['jenis_user']==""){
  header("location:login.php?pesan=gagal");
 }

 ?>
<head>
	<title>sidebar</title>
    <link rel="stylesheet" type="text/css" href="tabel.css">
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <script src="https://kit.fontawesome.com/a79e2598ea.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
    <div class="logo">
    <img src="Laundry_Logo.png" alt="" width="90px" height="50px">
    <h2>Luce <br> Laundry</h2>
    </div>
        
        <ul>
            <li><a href="?page=home"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="?page=users"><i class="fas fa-user"></i>Users</a></li>
            <li><a href="?page=paket"><i class="fas fa-shopping-basket"></i>Paket</a></li>
            <li><a href="?page=konsumen"><i class="fas fa-users"></i>Konsumen</a></li>
            <li><a href="?page=transaksi"><i class="fas fa-money-bill"></i>Transaksi</a></li>
            <li>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </div>
    <div class="main_content">
        <div class="header">
            <div class="breadcrumb">
                <?php
                    if($_GET["page"] == 'home'){
                        echo "Home";
                    }else{
                        echo "Home > ".$_GET["page"];
                    }
                ?>
            </div>
            <div class="user-info">
                Halo <?php echo $_SESSION['username']; ?>, <?php echo $_SESSION['jenis_user']; ?>
            </div>
        </div>
        <div class="content">
            <?php
            switch($_GET["page"]) {

                case "users":
                include'halaman_user.php';
                break;


                case "edit_user":
                include'edit(user).php';
                break;

                case "paket":
                include'paket.php';
                break;

                case "add_paket":
                include'tambah(paket).php';
                break;
                
                case "edit_paket":
                include'edit(paket).php';
                break;

                case "konsumen":
                include'konsumen.php';
                break;

                case "add_konsumen":
                include'tambah(konsumen).php';
                break;

                case "edit_konsumen":
                include'edit(konsumen).php';
                break;

                case "transaksi":
                include'transaksi.php';
                break;

                case "add_transaksi":
                include'tambah(transaksi).php';
                break;

                case "edit_transaksi":
                include'edit(transaksi).php';
                break;

                default:
                include'home.php';
                break;

            }

            ?>
        </div>
    </div>
</div>


</body>
</html>