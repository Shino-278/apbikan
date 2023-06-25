<!DOCTYPE html>
<html lang="en">

<!-- PHP -->
    <?php require "component/head.php"; 
          include "include/conn.php";
    ?>

<!-- Style CSS -->

<style>
        .table1 {
            font-family:'Century gothic';
            font-size: 14px;
            color: #444;
            border-collapse: collapse;
            width: 25%;
            border: 1px solid #f2f5f7;
            border-radius: 20px;
        }

        .table1 tr th{
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1, th, td {
            padding: 2px 6px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
 </style>

<!-- End CSS -->

<body>
    
    <?php require "component/navbar.php"; ?>

<div class="container-fluid">
<div class="row">

<div class="col-sm-8 offset-sm-3 mt-5">
    <h2>Dashboard</h2>
</div>

  <div class="col-sm-2 mb-3 mb-sm-0 offset-sm-3">
    <div class="card shadow mt-3">
      <div class="card-body">
        <h5 class="card-title mb-3">Total Pasien</h5>
            <!-- PHP Hitung Data -->
            <h3>
            <?php  
                $query = "SELECT COUNT(*) as total FROM pasien";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    die("Query gagal: " . mysqli_error($conn));
                }

                $row = mysqli_fetch_assoc($result);
                $totalData = $row['total'];

                echo $totalData;
            ?>
            </h3>
            <!-- End Hitung Data -->
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card shadow mt-3">
      <div class="card-body">
        <h5 class="card-title mb-3">Total Dokter</h5>
            <!-- PHP Hitung Data -->
            <h3>
            <?php  
                $query = "SELECT COUNT(*) as total FROM dokter";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    die("Query gagal: " . mysqli_error($conn));
                }

                $row = mysqli_fetch_assoc($result);
                $totalData = $row['total'];

                echo $totalData;
            ?>
            </h3>
            <!-- End Hitung Data -->
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card shadow mt-3">
      <div class="card-body">
        <h5 class="card-title mb-3">Total Transaksi</h5>
            <!-- PHP Hitung Data -->
            <h3>
            <?php  
                $query = "SELECT COUNT(*) as total FROM selesaimembayar";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    die("Query gagal: " . mysqli_error($conn));
                }

                $row = mysqli_fetch_assoc($result);
                $totalData = $row['total'];

                echo $totalData;
            ?>
            </h3>
            <!-- End Hitung Data -->
      </div>
    </div>
  </div>

  <div class="col-sm-11 offset-sm-3 mt-4">
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">APBIKAN (Aplikasi Pembantu Bidan Kandungan)</h5>
            <p class="card-text">   Bidan adalah tenaga medis yang memiliki kiprah panjang dalam dunia kesehatan di Indonesia. 
                Pelayanan bidan merupakan bagian integral dari sistem kesehatan nasional yang memberikan kontribusi yang tidak 
                kecil dalam pembangunan sektor kesehatan nasional atau kebijakan kesehatan nasional.</p>
        </div>
    </div>
  </div>

  <div class="col-sm-11 offset-sm-3 mt-3">
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title mb-3">Data Dokter</h5>
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

                            $idd       = $r['id_dokter'];
                            $namad     = $r['nama'];
                            $nip       = $r['NIP'];
                            $jenkel    = $r['jenis_kelamin'];
                            $nohp      = $r['no_hp'];
                            $jadwal    = $r['jadwal_praktik'];
                        ?>
                            <tr>
                            <td><?php echo $idd; ?></td>
                            <td><?php echo $namad; ?></td>
                            <td><?php echo $nip; ?></td>
                            <td><?php echo $jenkel; ?></td>
                            <td><?php echo $nohp; ?></td>
                            <td><?php echo $jadwal; ?></td>
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
</div>

</body>
</html>