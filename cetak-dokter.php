<?php 
    include "include/conn.php" ;
    require "component/head.php";
?>


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
 

    <script>
		window.print();
        window.onafterprint = function() {
        window.location.href = 'data-dokter.php';
    };
	</script>
