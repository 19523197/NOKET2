<?php

include "koneksi.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$sql = "DELETE FROM catatankeuangan WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result)
{ // Close connection
    header("location:../penjualan.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>