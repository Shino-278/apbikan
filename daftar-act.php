<?php 
    include "include/conn.php"; 

    // Proses Memasukkan Data Kedaalam Database

    $id      = uniqid();
    $nik     =$_POST['nik'];
    $nama    =$_POST['nama'];
    $ttl     =$_POST['tanggal'];
    $alamat  =$_POST['alamat'];
    $jenkel  =$_POST['jenkel'];
    $nohp    =$_POST['nohp'];
    $gol     =$_POST['gol'];

    $sql = "INSERT INTO pasien VALUES ('$id','$nik','$nama','$ttl','$alamat','$jenkel', '$nohp', '$gol')";

		if (mysqli_query($conn, $sql)){

			echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'pendaftaran.php';</script>";

		} else {

			echo "Error : " .$sql. "<br>" . mysqli_error($conn);
		}
?>