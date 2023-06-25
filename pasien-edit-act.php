<?php
require "include/conn.php";
$id = $_POST['ID_PASIEN'];

$nik     =$_POST['nik'];
$nama    =$_POST['nama'];
$ttl     =$_POST['tanggal'];
$alamat  =$_POST['alamat'];
$jenkel  =$_POST['jenkel'];
$nohp    =$_POST['nohp'];
$gol     =$_POST['gol'];

$sql = "UPDATE pasien SET NIK='$nik',Nama='$nama',Tanggal_lahir='$ttl',Alamat='$alamat',Jenis_Kelamin='$jenkel',No_HP='$nohp',Gol_Darah='$gol' WHERE ID_PASIEN='$id'";

if (mysqli_query($conn, $sql)){

    echo "<script>alert('Data berhasil di edit.'); window.location.href = 'data-pasien.php';</script>";

} else {

    echo "Error : " .$sql. "<br>" . mysqli_error($conn);
}
?>