<?php
    include 'koneksi.php';
    session_start();

    $username = $_POST['username'];
    $no_hp = $_POST['no-hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO pengguna (username, password, email, nohp) VALUES ('$username', '$password', '$email','$no_hp')";
    $result = mysqli_query($conn, $sql);

    header("Location: ../login.php");
   
    
?>