<?php
require "include/conn.php";
$id = $_POST['id_dokter'];

$nama    =$_POST['nama'];
$nip     =$_POST['nip'];
$jenkel  =$_POST['jenkel'];
$nohp    =$_POST['nohp'];
$jadwal  =$_POST['jadwal'];

$sql = "UPDATE dokter SET Nama='$nama',NIP='$nip',jenis_kelamin='$jenkel',no_hp='$nohp',jadwal_praktik='$jadwal' WHERE id_dokter='$id'";

if (mysqli_query($conn, $sql)){

    echo "<script>alert('Data berhasil di edit.'); window.location.href = 'data-dokter.php';</script>";

} else {

    echo "Error : " .$sql. "<br>" . mysqli_error($conn);
}
?>