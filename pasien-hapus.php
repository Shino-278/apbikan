<?php
    require "include/conn.php";
    $id = $_GET['id'];
    $sql = "DELETE from pasien where ID_PASIEN='$id'";

    if (mysqli_query($conn, $sql)){

        echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'data-pasien.php';</script>";

    } else {

        echo "Error : " .$sql. "<br>" . mysqli_error($conn);
    }
   
?>