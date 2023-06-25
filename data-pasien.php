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
                <h2>Data Pasien</h2>
            </div>

            <!-- Pencarian -->
            <form class="row g-3 mt-4" action="data-pasien.php" method="get">
                <div class="col-md-5 offset-sm-2">
                    <input type="text" class="form-control" id="inputEmail4" name="cari" placeholder="Cari Data Pasien" >
                </div>
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary" value="cari">Refresh</button>
                </div>
            </form>
            <!-- End Pencarian -->
            <div class="col-sm-11 offset-sm-2">
                <div class="table-container">
                    <table>
                        <thead>
                        <tr>
                            <th>Id Pasien</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>Gol Darah</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "include/conn.php";

                            if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            $data = mysqli_query($conn,"select * from pasien where Nama like '%".$cari."%'");
                            }else{
                            $data = mysqli_query($conn,"select * from pasien"); 
                            }
                        

                            while($r = mysqli_fetch_array($data)){

                            $id     = $r['ID_PASIEN'];
                            $nik    = $r['NIK'];
                            $nama   = $r['Nama'];
                            $ttl    = $r['Tanggal_Lahir'];
                            $alamat = $r['Alamat'];
                            $jenkel = $r['Jenis_Kelamin'];
                            $nohp   = $r['No_HP'];
                            $gol    = $r['Gol_Darah'];
                        ?>
                        
                            <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $nik; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $ttl; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jenkel; ?></td>
                            <td><?php echo $nohp; ?></td>
                            <td><?php echo $gol; ?></td>
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
    <a href="cetak-pasien.php" class="btn btn-primary">Cetak Data</a>
    </div>
</div>

<script>
function konfirmasiEdit(id) {
  if (confirm("Apakah Anda yakin ingin mengedit data ini?")) {
    // Jika pengguna mengkonfirmasi penghapusan, kirim permintaan penghapusan ke skrip PHP
    window.location.href = "pasien-edit.php?id=" + id;
  }
}

function konfirmasiHapus(id) {
  if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
    // Jika pengguna mengkonfirmasi penghapusan, kirim permintaan penghapusan ke skrip PHP
    window.location.href = "pasien-hapus.php?id=" + id;
  }
}
</script>

</body>
</html>
