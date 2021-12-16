<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/login.css">
        

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
                            <li><h3><a href="#" id="selected">Log In</a></h3></li>
                            <li><h3><a href="registrasi.php">Sign Up</a></h3></li>
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
                    <form method="post" action="php/masuk.php">
                    <div id="form-container-judul">
                        <h1>Login</h1>
                    </div>
                    <div id="form-container-username">
                        
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div id="form-container-password">
                        
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div id="form-container-button">
                        <p id="hasil"></p>
                        <input type="submit" value="Login" onclick="validasi()">
                    </div>

                   
                    
                    </form>
                </div>
            </div>
            

        </div>

        

        <div id="footer">
            <h4>Copyright @ 2021 Team ALOHA</h4>
        </div>
    </div>
    </body>
    <script src="js/loginValidasi.js"></script>
</html>
