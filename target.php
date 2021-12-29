<?php
    include 'php/koneksi.php';
    session_start();

    $sql = "SELECT nama FROM subkategori";
    $result = mysqli_query($conn, $sql);
    
    
   
    
?>

<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/edit-transaksi-pengeluaran.css">
        

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
                        <h1>Admin</h1>   
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

                <a href="#" class="sidebar-item-container collapsible">
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

                <a href="#" class="sidebar-item-container selected">
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

<div class = "daftarTarget">Yuk cobain fitur ini, kamu jadi lebih mudah memantau performa penjualanmu!</div>

<img src="foto/logo-orang-target.png" style="widht:50px;height:50px; ">
<!-- <style style="widht:200px;height:200px; "> -->
<p>Tambah target penjualanmu disini!</p>

<a href="" id="button-tambah">
    <div id="button-tambah-container">   
        <img src="foto/icons8-plus-+-96.png" alt="" id="button-tambah-img">
        Tambah Target
    </div>
</a>

<div class="isi">
<p>Berikut target penjualanmu yang sudah tercapai!</p>
<div class="laporan-container">
        <div class="laporan-card">
            <div class="laporan-card-kategori">
                <p>Target UKM</p>
                <h1>Rp 10.000.000</h1>
            </div>
            <div class="laporan-card-jumlah">
                <h2 class="jumlah-penjualan">12 Januari 2021 s/d 12 Januari 2022</h2>
            </div>
        </div>
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
