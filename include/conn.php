<?php 
    $conn = mysqli_connect('localhost','root','','apbikan');

    if(!$conn){
        die ("Gagal Terkoneksi ".mysqli_connect_error());
    }
?>
