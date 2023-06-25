<!DOCTYPE html>
<html>
<head>
  
<?php 
    require "component/head.php";
    require "component/navbar.php";
?>

</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-sm-8 offset-sm-2 mt-5">
                <h2>Data Dokter</h2>
            </div>

            <div class="col-sm-11 offset-sm-2">
                <div class="table-container">
                    <table>
                        <thead>
                        <tr>
                            <th>Id Dokter</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>Jadwal Praktik</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "include/conn.php";

                            if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            $data = mysqli_query($conn,"select * from dokter where Nama like '%".$cari."%'");
                            }else{
                            $data = mysqli_query($conn,"select * from dokter"); 
                            }
                        

                            while($r = mysqli_fetch_array($data)){

                            $id        = $r['id_dokter'];
                            $namad     = $r['nama'];
                            $nip       = $r['NIP'];
                            $jenkel    = $r['jenis_kelamin'];
                            $nohp      = $r['no_hp'];
                            $jadwal    = $r['jadwal_praktik'];
                        ?>
                            <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $namad; ?></td>
                            <td><?php echo $nip; ?></td>
                            <td><?php echo $jenkel; ?></td>
                            <td><?php echo $nohp; ?></td>
                            <td><?php echo $jadwal; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" name="edit" value="<?php echo $id; ?>" onclick="konfirmasiEdit(this.value)">Edit</button>
                                <button type="button" class="btn btn-danger mt-1" name="hapus" value="<?php echo $id; ?>" onclick="konfirmasiHapus(this.value)">Hapus</button>
                            </td>
                            </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-8 offset-sm-3 mt-1">
    <a href="cetak-dokter.php" class="btn btn-primary">Cetak Data</a>
    </div>
</div>

<script>
function konfirmasiEdit(id) {
  if (confirm("Apakah Anda yakin ingin mengedit data ini?")) {
    // Jika pengguna mengkonfirmasi penghapusan, kirim permintaan penghapusan ke skrip PHP
    window.location.href = "dokter-edit.php?id=" + id;
  }
}  
  
function konfirmasiHapus(id) {
  if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
    // Jika pengguna mengkonfirmasi penghapusan, kirim permintaan penghapusan ke skrip PHP
    window.location.href = "dokter-hapus.php?id=" + id;
  }
}
</script>

</body>
</html>
