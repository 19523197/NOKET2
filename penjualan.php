<?php
    include 'php/koneksi.php';
    session_start();

    $sql = "SELECT * FROM pengguna WHERE username = '$_SESSION[username]'" ;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql2 = "SELECT ck.id AS id, sk.nama, ck.keterangan , ck.jumlah, ck.tanggal FROM catatankeuangan ck INNER JOIN subkategori sk ON ck.id_subkategori = sk.id INNER JOIN kategoricatatan kc ON sk.id_kategori = kc.id WHERE ck.id_pengguna = '$_SESSION[id]' AND sk.id_kategori = 1;" ;
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT SUM(ck.jumlah) AS jumlah FROM catatankeuangan ck INNER JOIN subkategori sk ON ck.id_subkategori = sk.id WHERE sk.id_kategori = 1;";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);

    $sql4 = "SELECT SUM(ck.jumlah) AS jumlah FROM catatankeuangan ck INNER JOIN subkategori sk ON ck.id_subkategori = sk.id WHERE sk.id_kategori = 2;";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($result4);
?>

<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/penjualan.css">
        

        <!--Import Font dari web-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Raleway:ital,wght@0,800;1,500&family=Work+Sans:wght@500;900&display=swap" rel="stylesheet">
        
        
        <script src="js/components.js"></script>
    </head>
    <body>
    <div id="page">

        <div class = "navbar">
            <div class="navbarLogo">
                <h1>NOKET<h1>
            </div>
                <nav>
                        <ul class="navbarMenu">
                            <li><h3><a href="php/logout.php">Log out</a></h3></li>
                        </ul>
                </nav>
        </div>

        

        <div id="isi-page">
            <div id="sidebar">

                <div class="sidebar-item-profile">
                    <div id="sidebar-image-container">
                        <img src="foto/avatar-icon.png" alt="#" id="sidebar-image-profile">
                        <h1><?php echo $row['username'];?></h1>   
                    </div>
                </div>
                
            
                <a href="mainPage.php" class="sidebar-item-container">
                    <div class="sidebar-item">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-dashboard-100.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Dashboard</h3>
                        </div>
                    </div>
                </a>

                <a href="#" class="sidebar-item-container collapsible  selected">
                    <div class="sidebar-item">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-money-96.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Transaksi</h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="penjualan.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/kanan.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Penjualan</h4>
                                </div>
                            </div>
                        </a>
        
                        <a href="pengeluaran.php" class="collapse-item-container">
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/kiri.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Pengeluaran</h4>
                                </div>
                            </div>
                        </a>

                        <a href="laporan-transaksi.php" class="collapse-item-container">
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src= "foto/laporan.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Laporan</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                <a href="#" class="sidebar-item-container collapsible">
                    <div class="sidebar-item">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-money-bag-90.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Utang & Piutang</h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="utang.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                  <img src="foto/keluar.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Utang</h4>
                                </div>
                            </div>
                        </a>

                        <a href="utang.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/masuk.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Piutang</h4>
                                </div>
                            </div>
                        </a>

                        <a href="utang.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/laporan.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Laporan</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                <a href="#" class="sidebar-item-container">
                    <div class="sidebar-item">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-goal-100.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Target</h3>
                        </div>
                    </div>
            </a>
                <a href="#" class="sidebar-item-container collapsible">
                    <div class="sidebar-item">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-account-100.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Account</h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="#" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-admin-settings-male-90.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Profil</h4>
                                </div>
                            </div>
                        </a>
        
                        
                    </div> 
            </div>

            

            <div id="content-card">
                
            <div id="info-header">
                    <div id="info-header-kiri">
                        <div class="info-header-judul">
                            <h3>Penjualan</h3>
                        </div>
                        <div class="info-header-isi">
                            <h1 style="color: 00A85A;">Rp <?php echo $row3['jumlah'] ;?>.-</h1>
                        </div>
                        
                    </div>
                    <div id="info-header-kanan">
                        <div class="info-header-judul">
                            <h3>Pengeluaran</h3>
                        </div>
                        <div class="info-header-isi">
                            <h1 style="color: DE4B39;">Rp <?php echo $row4['jumlah'] ;?>.-</h1>
                        </div>
                    </div>
                </div>

                <div id="table-atas">
                    <a href="penjualan.php"  id="table-atas-penjualan">
                        <p>Penjualan</p>
                    </a>

                    <a href="pengeluaran.php" id="table-atas-pengeluaran">
                        <p>Pengeluaran</p>
                    </a>

                    <div id="table-atas-jarak">

                    </div>
                    <a href="tambah-transaksi.php" id="table-atas-tambah">
                        <p>Tambah Transaksi</p>
                    </a>
                </div>

                <div id="table-wrapper">
                    <div id="table-scroll">
                        <table id="myTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">
                                        <p>     
                                            Kategori
                                        </p>
                                            
                                    </th>
                                    <th style="width: 30%;">
                                        <p>     
                                            Nama Penghasilan
                                        </p>
                                    </th>
                                    <th style="width: 25%;" onclick="sortTable(0)">
                                        <p>     
                                            Nominal
                                        </p>
                                    </th>
                                    <th style="width: 20%;" onclick="sortTable(1)">
                                        <p>     
                                            Tanggal
                                        </p>
                                    </th>
                                    <th style="width: 20%;">
                                        <p>
                                            Aksi
                                        </p>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                                while($row2 = mysqli_fetch_assoc($result2)) {
                                    echo "<tr>
                                        <td><p id='table-kategori-pengeluaran' style='font-weight:bold;'>".$row2['nama']."</p></td>
                                        <td><p>".$row2['keterangan']."</p></td>
                                        <td><p>RP ".$row2['jumlah']."-</p></td>
                                        <td><p>".$row2['tanggal']."</p></td>
                                        <td>
                                        <a href='edit-transaksi-penjualan.php?id=".$row2['id']."'><button id='tombol-aksi-edit' name='bEdit'>Edit</button></a>
                                        <a href='php/hapus-transaksi.php?id=".$row2['id']."'><button id='tombol-aksi-hapus' name='bHapus'>Hapus</button></a>
                                        </td>
                                    </tr>";
                                }
                                ?>
        
                                

                                
                            </tbody>
                            
    
                            
                        </table>
                    </div>
                    
                </div>

                
                
            </div>

        </div>

        

        <div id="footer">
            <h4>Copyright@2021 Team ALOHA </h4>
        </div>
    </div>


    <script>
        /****Script Collapse Sidebar*****/
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
        /*********************************/

        
    
        
    </script>
    </body>
</html>
