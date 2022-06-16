<?php
    IF($_SESSION['jenis_user'] == 'admin'){
?>
<br>
<br>
<a class="btn" href="?page=add_paket"><i class="fas fa-plus"></i><b>Add Data</b></a>
    <br>
    <br>
    <table class="table-view" border="1">
        <thead>
        <tr>
            <td>No</td>
            <td>Kode Paket</td>
            <td>Nama Paket</td>
            <td>Harga/Kg</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM paket");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_paket']; ?></td>
            <td><?php echo $d['nama_paket']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td>
                <a href="?page=edit_paket&id=<?php echo $d['kode_paket']; ?>"><i class="fas fa-edit"></i></a>
                <a href="hapus(paket).php?id=<?php echo $d['kode_paket']; ?>"><i class="fas fa-trash-alt"></i></a>
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
 <br>
 <br>
 <center>
 <p style="color:black; font-size:27px"><b>Layanan Luce Laundry</b><br> </p>
 </center>
 <br>
 <br>
 
    <table class="table-view" border="1">
        <thead>
        <tr>
            <td>No</td>
            <td>Kode Paket</td>
            <td>Nama Paket</td>
            <td>Harga/Kg</td>
        </tr>
        </thead>
        <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM paket");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_paket']; ?></td>
            <td><?php echo $d['nama_paket']; ?></td>
            <td><?php echo $d['harga']; ?></td>
        </tr>
        <?php 
        } 
        ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
<?php	
}
?>

