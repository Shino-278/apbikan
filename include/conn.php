<?php 
    $conn = mysqli_connect('localhost','root','','abikan');

    if(!$conn){
        die ("Gagal Terkoneksi ".mysqli_connect_error());
    }
?>