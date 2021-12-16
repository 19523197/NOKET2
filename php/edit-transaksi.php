<?php

include "koneksi.php";

$id = $_GET['id'];
$jumlah = $_POST['nominal'];
$tanggal = $_POST['tanggal'];
$kategori = $_POST['kategori'];
$query_kategori = "SELECT id FROM subkategori WHERE nama = '$kategori'";
$result2 = mysqli_query($conn,$query_kategori);
$row = mysqli_fetch_assoc($result2);
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE catatankeuangan SET id_subkategori = '$row[id]', keterangan = '$deskripsi' , jumlah = '$jumlah' , tanggal = '$tanggal' WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if(!$result)
    {
        echo mysqli_error($conn);
        die();
    }
    else
    {
        echo "<script>alert('Selamat, edit berhasil!')</script>";
        header("Location:../penjualan.php");

    } 


?>