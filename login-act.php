<?php 
session_start();
include 'include/conn.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $data['username'];
        header('Location: home.php');
    } else {
        header('Location: login-act.php');
        }
?>