<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/mainPage.css">
        

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
                            <li><h3><a href="login.php">Log out</a></h3></li>
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
                
            
                <a href="#" class="sidebar-item-container selected">
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
                            <img src="foto/kiri.png" alt="" id="sidebar-image">
                        </div>
                        <div class="sidebar-item-text">
                            <h3>Transaksi</h3>
                        </div>
                    </div>
                </a>

                    <div class="collapse-item">
                        <a href="pemasukan.php" class="collapse-item-container" >
                            <div class="collapse-item-2">
                                <div id="collapse-item-icon">
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
                            <img src="foto/kanan.png" alt="" id="sidebar-image">
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
                
				<div class = "atas">
					<div class = "hijau">
					&nbsp&nbsp&nbsp&nbsp&nbsp Rp.
					<img src = "foto/chartHijau.png">
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp Pemasukan Bulan ini</p>
					</div>
					
					<div class = "merah">
					&nbsp&nbsp&nbsp&nbsp&nbsp Rp. 
					<img src = "foto/chartMerah.png">
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp Pengeluaran Bulan ini</p>
					</div>
				</div>
	
				<div class = "InfoAtas">
					<div class = "hInfo">
					<p></p>
					<center> <a href=#>More Info</a></center>
					</div>
					<div class = "mInfo">
					<p></p>
					<center> <a href=#>More Info</a></center>
					</div>
				</div>
				
				<div class = "bawah">
					<div class = "biru">
					&nbsp&nbsp&nbsp&nbsp&nbsp Rp. 
					<img src = "foto/chartBiru.png" >
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp Utang Belum dibayar</p>
					</div>
					
					<div class = "oren">
					&nbsp&nbsp&nbsp&nbsp&nbsp Rp. 
					<img src = "foto/chartOren.png">
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp Piutang Belum dibayar</p>
					</div>
				</div>
	
				<div class = "InfoBawah">
					<div class = "bInfo">
					<p></p>
					<center> <a href=#>More Info</a></center>
					</div>
					<div class = "oInfo">
					<p></p>
					<center> <a href=#>More Info</a></center>
					</div>
				</div>
				
                <div class="Transaksi">
                    <h4>Transaksi Terbaru</h4>
                    <div class = "pemasukan">
                        <h3>Pemasukan</h3>
                        <h4 style="float: right; color: #00A85A;">+ Rp. 1200000</h4>
                        <h6>28 Nov 2021 - 09.31</h6>
                    </div>
                    
                    <div class="pengeluaran">
                        <h3>Pengeluaran</h3>
                        <h4 style="float: right; color: #C74333 ;">- Rp. 200000</h4>
                        <h6>28 Nov 2021 - 09.31</h6>
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
