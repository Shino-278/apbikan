<?php  
    include "include/conn.php";
    $id = $_GET['id'];
    $sql = "DELETE from dokter where id_dokter='$id'";

    if (mysqli_query($conn, $sql)){

        echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'data-dokter.php';</script>";

    } else {

        echo "Error : " .$sql. "<br>" . mysqli_error($conn);
    }
?>