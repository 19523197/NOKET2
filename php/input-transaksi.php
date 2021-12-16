<?php
    include 'koneksi.php';
    session_start();


    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $query_id_kategori = "SELECT id FROM subkategori WHERE nama = '$kategori'";
    $result = mysqli_query($conn, $query_id_kategori);
    $row = mysqli_fetch_assoc($result);
    $tanggal = $_POST['tanggal'];
    $nominal = $_POST['nominal'];


    $sql = "INSERT INTO catatankeuangan (id_pengguna, jumlah, tanggal, keterangan, id_subkategori) VALUES ('$_SESSION[id]','$nominal', '$tanggal', '$deskripsi', '$row[id]')";
    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
        echo mysqli_error($conn);
        die();
    }
    else
    {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        header("Location:../penjualan.php");

    } 

    
   
    
?>