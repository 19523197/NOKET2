<?php
    include 'koneksi.php';
    session_start();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO akun (akun_id,username, password, email) VALUES ('5','$username', '$password', '$email')";
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");
   
    
?>