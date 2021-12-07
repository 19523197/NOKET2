<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/target.css">
        

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
                            <li><h3><a href="#"></a></h3></li>
                            <li><h3><a href="#"></a></h3></li>
                            <li><h3><a href="#">About</a></h3></li>
                            <li><h3><a href="login.php">Log Out</a></h3></li>
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
                            <h3>Uang ></h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="pemasukan.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-get-cash-96.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Pemasukkan</h4>
                                </div>
                            </div>
                        </a>
        
                        <a href="pengeluaran.php" class="collapse-item-container">
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-return-purchase-96.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Pengeluaran</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                <a href="#" class="sidebar-item-container collapsible">
                    <div class="sidebar-item ">
                        <div id="sidebar-item-icon">
                            <img src="foto/icons8-money-bag-90.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Utang-Piutang ></h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="#" class="collapse-item-container  " >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-debt-96.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Utang</h4>
                                </div>
                            </div>
                        </a>
        
                        <a href="piutang.php" class="collapse-item-container selected">
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
                                    <img src="foto/icons8-debt-90.png" alt="" id="sidebar-image">
                                </div>
                                <div class="sidebar-item-text">
                                    <h4>Piutang</h4>
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
                            <h3>Account ></h3>
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

                <div class = "daftarTarget">Daftar Target</div>
                
                    
                </table>

                <table id="table" rules=none>
                    <tr>
                        <th><h3>Nama</h3></th>
                        <th><h3>Pembukuan</h3></th>
                        <th id="table-target"><h3>Target</h3></th>
                        <th><h3>Sisa</h3></th>
                        <th><h3>Tanggal</h3></th>
                        <th><h3>Aksi</h3></th>
                    </tr>
                    <tr>
                        <td><p>Utang 1</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp500.000,00-</p></td>
                        <td><p>2020-4-20</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Utang 2</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp20.000.000,00-</p></td>
                        <td><p>2021-6-9</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Utang 3</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp500.000,00-</p></td>
                        <td><p>2021-10-20</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Utang 4</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp500.000,00-</p></td>
                        <td><p>2021-11-10</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Utang 5</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp120.000.000,00-</p></td>
                        <td><p>2021-11-20</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Utang 6</p></td>
                        <td><p>Rp 0</p></td>
                        <td class="table-target"><p>Rp 10000000</p></td>
                        <td><p>Rp10.000.000,00-</p></td>
                        <td><p>2021-11-25</p></td>
                        <td class="aksi-col">
                            <a href="#" class="isi-aksi">
                                <img src="foto/setor.png" style="width:1em;height:1em;" ><p>Setor</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/edit-icon.png" style="width:1em;height:1em;" ><p>Edit</p>
                            </a>
                            <a href="#" class="isi-aksi">
                                <img src="foto/hapus-icon.png" style="width:1em;height:1em;" ><p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                </table>
                <a href="" id="button-tambah">
                    <div id="button-tambah-container">   
                        <img src="foto/icons8-plus-+-96.png" alt="" id="button-tambah-img">
                        Tambah
                    </div>
                </a>
            
            </div>

        </div>

        

        <div id="footer">
            <h3 style="text-align:center">Copyright@2021 TEAM ALOHA </h3>
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
