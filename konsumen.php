
<br>
<br>
<a class="btn" href="?page=add_konsumen"><i class="fas fa-plus"></i><b>Add Data</b></a>
    <br>
    <br>
    <table class="table-view" border="1">
        <thead>
        <tr>
            <td>No</td>
            <td>Kode Konsumen</td>
            <td>Nama Konsumen</td>
            <td>Alamat</td>
            <td>Nomor Handphone</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM konsumen");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_konsumen']; ?></td>
            <td><?php echo $d['nama_konsumen']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td>
                <a href="?page=edit_konsumen&id=<?php echo $d['kode_konsumen']; ?>"><i class="fas fa-edit"></i></a>
                <a href="hapus(konsumen).php?id=<?php echo $d['kode_konsumen']; ?>"><i class="fas fa-trash-alt"></i></a>
            </td>    
        </tr>
        <?php 
        } 
        ?>
        </tbody>
    </table>