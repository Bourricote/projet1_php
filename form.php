
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Dominique, Paul, Adrien, Anne">
        <meta name="description" content="Présentation d'un pub mythique de Bordeaux !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>The Central Pub</title>
    </head>

    <body class="page-2">
        <header>
        
        
        
            <nav class="navbar" id="myTopnav">
            
                
                <a href="./index.php" id="texte">
                    <h2>The Central Pub</h2>
                </a>
                <a href="./index.php#all-card">Menu</a>
                <a href="./index.php#all-card">Carte</a>
                <a href="./index.php#booking">Réservation</a>
                <a href="page2.php">Livraison</a>
                <a href="javascript:void(0);" class="icon" onclick="burgerResponsive()">
                    <i class="fa fa-bars"></i>
                </a>
            
            </nav>
    
        
        </header>

        
        
        <!------------------------------------------------------------------------------------------------>
        
        
        
        <section id="php">
            <h1 id="php_title"> <?php echo 'Merci ' . $_POST['first_name'] . ' ' . $_POST['name'] . ', votre réservation pour le '. date("d M Y", strtotime($_POST['date'])) . ' a ' . $_POST['hour'] . ' a bien été prise en compte !'; ?></h1>
            
        </section>



        <footer>
            <div class="div_img_footer">
                <img src="Images/logo.png" alt="logo Central Pub" id="logo_footer"/>
            </div>
            <div class="footer_div" id="horaires">
                <h3>Horaires d'ouverture</h3>
                <p>Nous sommes ouverts 7j/7</p>
                <p>de 9h00 à 2h00</p>
                <p>Service en continu</p>
            </div>
            <div class="footer_div" id="contact">
                <p>7 Quai des Queyries</p>
                <p>33800 Bordeaux</p>
                <p>05 57 80 38 00</p>

            
                <a href="./index.php#booking">Formulaire de réservation</a>
                <a href="page2.php" target="_blank">Formulaire de livraison</a>
            </div>
            <div class="div_img_footer">
                <img src="Images/map.png" alt="access map" id="map_footer"/>
            </div>
            <div id="social">
                <a href="https://www.facebook.com/thecentralpubbastide/"><img src="Images/facebook.svg" alt="logo facebook" class="social_logo" /></a>
                <a href="https://www.instagram.com/thecentralpubbastide/?hl=fr"><img src="Images/insta.svg" alt="logo instagram" class="social_logo"/></a>
                <a href="#"><img src="Images/twitter.svg" alt="logo twitter" class="social_logo"/></a>
            </div>
            <script src="script.js"></script>
        </footer>
    </body>

    </html>