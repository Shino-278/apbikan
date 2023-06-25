<?php 
    include "include/conn.php" ;
    require "component/head.php";
?>

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
                            </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

    <script>
		window.print();
        window.onafterprint = function() {
        window.location.href = 'data-pasien.php';
    };
	</script>
