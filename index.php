<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Raleway:ital,wght@0,800;1,500&family=Work+Sans:wght@500;900&display=swap" rel="stylesheet">
        <title>Landing Page NOKET</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#"class="nav__logo">NOKET</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#feature" class="nav__link">Features</a></li>
                        <li class="nav__item"><a href="login.php" class="nav__link">Log in</a></li>
                        <li class="nav__item"><a href="Registrasi.php" class="nav__link">Sign Up</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/img1.png" alt="" data-speed="-2" class="move">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">NOKET<br></h1>
                        <h2 class="home__abb">Notes Market</h2>
                        <p></p>
                        <p class="home__description">" Lupakan Kertas Beralih ke Digital "</p>
                        <a href="login.php" class="home__button">Get Started</a>
                    </div>
                </div>
            </section>
        </main>

        <main class="m-main">
            <!--===== FEATURES =====-->
            <section class="feature" id="feature">
            <div class="feature__container bd-grid">

            
                <div class ="feature__data">
                    <h2 class="feature__title">Catat Keuangan UKM lebih Efektif dengan Fitur</h2>
                <div class ="feature__img">
                <img src="assets/img/1.png" alt="" data-speed="1" class="move">
                <br>
                    <i>Pencatatan Penjualan Pengeluaran Keuangan UKM secara digital yang mudah dan aman</i>
                    <br>
                <img src="assets/img/2.png" alt="" data-speed="1" class="move">
                <br>
                    <i>Pencatatan Utang Piutang yang dimiliki UKM dan Dapat mengetahuinya Lebih Detail</i>
                    <br><br>
                <img src="assets/img/3.png" alt="" data-speed="1" class="move"> 
                <br>
                    <i>Tentukan dan Realisasikan target yang ingin dicapai UKM</i>
                    <br>
                <div> 
            </div>
            </section>
        </main>

        <main class="n-main">
            <!--===== About Us =====-->
             <section class="about" id="about">
            <div class="about__container bd-grid">

            
                <div class ="about__data">
                    <h2 class="about__title">About Us</h2>
                <div class ="about__img">

                <div class="tableFoto">
                <table>

                <td><img src ="assets/img/f.jpeg"></td>
                <td><img src ="assets/img/h.jpeg"></td>
                <td><img src ="assets/img/a.jpeg"></td>
                <td><img src ="assets/img/r.jpeg"></td>
                
                <tr>
                <td>MUHAMMAD FACHRI RAMADHAN</td>
                <td>HELMY FACHREZA HIMAWAN</td>
                <td>MUHAMMAD FADHIL ATHALLAH</td>
                <td>RAIHAN RIFALDI</td>
                </tr>

                <tr>
                <td>19523197</td>
                <td>20523195</td>
                <td>20523201</td>
                <td>20523030</td>
                </tr>
                </table>
                </div>
                <div> 
            </div>
            </section>
        </main>

         <footer id="footer">
            <!--===== Footer =====-->
            <h3>Copyright@2021 Team ALOHA</h3>
        </footer>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
