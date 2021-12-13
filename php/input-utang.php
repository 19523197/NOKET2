<?php
    include 'koneksi.php';
    session_start();

    $user_id = $_SESSION['id'];
    $instansi = $_POST['instansi'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $query_id_instansi = "SELECT id FROM instansi WHERE nama = '$instansi'";
    $query_id_kategori = "SELECT id FROM subkategori WHERE nama = '$kategori'";
    $result_kategori = mysqli_query($conn, $query_id_kategori);
    $result_instansi = mysqli_query($conn, $query_id_instansi);
    $row = mysqli_fetch_assoc($result_instansi);
    $row2 = mysqli_fetch_assoc($result_kategori);
    

    $sql = "INSERT INTO catatanutang (jumlah, tanggal, id_pengguna, id_subkategori, id_instansi) VALUES ('$jumlah', '$tanggal', '$user_id','$row2[id]','$row[id]')";
    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
        echo mysqli_error($conn);
        die();
    }
    else
    {
        echo "Query succesfully executed!";
    } 
   
    
?>