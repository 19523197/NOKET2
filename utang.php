<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/utang.css">
        

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

                <a href="#" class="sidebar-item-container collapsible selected">
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

                        <a href="piutang.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/masuk.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Piutang</h4>
                                </div>
                            </div>
                        </a>

                        <a href="laporan-utang.php" class="collapse-item-container" >
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
        
                        <a href="index.php" class="collapse-item-container">
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-wallet-90.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Saldo</h4>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>

            

            <div id="content-card">
                
                <div id="info-header">
                    <div id="info-header-kiri">
                        <div class="info-header-judul">
                            <h3>Utang Saya</h3>
                        </div>
                        <div class="info-header-isi">
                            <h1 style="color: 0172B7;">Rp 3.900.000.-</h1>
                        </div>
                        
                    </div>
                    <div id="info-header-kanan">
                        <div class="info-header-judul">
                            <h3>Utang Pelanggan</h3>
                        </div>
                        <div class="info-header-isi">
                            <h1 style="color: FF861A;">Rp 3.900.000.-</h1>
                        </div>
                    </div>
                </div>

                <div id="table-atas">
                    <a href="utang.php"  id="table-atas-penjualan">
                        <p>Utang Saya</p>
                    </a>

                    <a href="piutang.php" id="table-atas-pengeluaran">
                        <p>Utang Pelanggan</p>
                    </a>

                    <div id="table-atas-jarak">

                    </div>
                    <a href="tambah-utang.php" id="table-atas-tambah">
                        <p>Tambah Utang</p>
                    </a>
                </div>

                <div id="table-wrapper">
                    <div id="table-scroll">
                        <table id="myTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 15%;">
                                        <p>     
                                            Kategori
                                        </p>
                                            
                                    </th>
                                    <th style="width: 20%;">
                                        <p>     
                                            Nama Pemberi
                                        </p>
                                    </th>
                                    <th style="width: 25%;" onclick="sortTable(0)">
                                        <p>     
                                            Nominal
                                        </p>
                                    </th>
                                    <th style="width: 15%;" onclick="sortTable(1)">
                                        <p>     
                                            Tanggal
                                        </p>
                                    </th>
                                    <th style="width: 25%;">
                                        <p>
                                            Aksi
                                        </p>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.200.000,-</p> 
                                    </td>
                                    <td>
                                        <p>28-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>

                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <p id="table-kategori-pengeluaran">Utang Saya</p> 
                                    </td>
                                    <td>
                                        <p>Pak budi</p>
                                    </td>
                                    <td>
                                        <p>Rp 1.500.000,-</p> 
                                    </td>
                                    <td>
                                        <p>21-11-2021</p>
                                    </td>
                                    <td style='white-space: nowrap; overflow: auto;'>
                                        <button id="tombol-aksi-edit" name="bEdit"><a href="edit-utang.php">Edit</a> </button>
                                        <button id="tombol-aksi-hapus" name="bHapus">Hapus</button>
                                        <button id="tombol-aksi-lunas" name="bLunas">Lunas</button>
                                    </td>
                                </tr>

                                
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
