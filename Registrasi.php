<html>
    <head>
        <title>Registrasi NOKET</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/Registrasi.css?v=<?php echo time(); ?>">
        

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
                            <li><h3><a href="index.php">Landing Page</a></h3></li>
                            <li><h3><a href="login.php">Log In</a></h3></li>
                            <li><h3><a href="Registrasi.php" id="selected">Sign Up</a></h3></li>
                        </ul>
                </nav>
        </div>
        

        <div id="isi-page">
            <div id="login-kiri">
                <div id="login-kiri-foto">
                    <img id="login-kiri-img" src="foto/Login 1.png">
                    
                </div>
                <div id="login-kiri-slogan">
                    <h4>Lupakan Kertas Beralih ke Digital</h4>
                </div>
            </div>

            <div id="login-kanan">
                <div id="form-container">
                    <form method="post" action="php/daftar.php">
                    <div id="form-container-judul">
                        <h1>Sign Up</h1>
                    </div>
                    <div id="form-container-username">
                        
                        <input type="text" name="username" id="" placeholder="Username">
                    </div>
                    <div id="form-container-password">
                        <input type="email" name="email" id="" placeholder="Email">
                    </div>
                    <div id="form-container-password">
            
                        <input type="password" calss="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div id="form-container-password">
                        <input type="password" calss="confirm-password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    </div>

                    <div id="form-container-password">
                        <input type="text" name="no-hp" id="" placeholder="No-HP">
                    </div>

                    <div id="form-container-button">
                        <input class = "button" type="submit" value="Register" onclick="validasi()"></input>
                    </div>

                    </form>
                    
                </div>
            </div>
            

        </div>
        

        <div id="footer">
            <p>Copyright@2021 Team ALOHA </p>
        </div>
    </div>
    </body>
    <script src="js/registrasiValidasi.js"></script>
</html>
