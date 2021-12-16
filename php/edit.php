<?php

include "koneksi.php";

$id = $_GET['id'];
$instansi = $_POST['instansi'];
$jumlah = $_POST['nominal'];
$tanggal = $_POST['tanggal'];
$query_id_instansi = "SELECT id FROM instansi WHERE nama = '$instansi'";
$result_instansi = mysqli_query($conn, $query_id_instansi);
$row = mysqli_fetch_assoc($result_instansi);

$sql = "UPDATE catatanutang SET id_instansi = '$row[id]' , jumlah = '$jumlah' , tanggal = '$tanggal' WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if(!$result)
    {
        echo mysqli_error($conn);
        die();
    }
    else
    {
        echo "<script>alert('Selamat, edit berhasil!')</script>";
        header("Location:../utang.php");

    } 


?>