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

<body>
<!-- Header : nav et bannière : Dominique ------------------------------->
    <header>
        <nav class="navbar" id="myTopnav">
            <a href="./index.php" id="texte"><h2>The Central Pub</h2></a>
            <a href="./index.php#all-card">Menu</a>
            <a href="./index.php#all-card">Carte</a>
            <a href="./index.php#booking">Réservation</a>
            <a href="./page2.html">Livraison</a>
            <a href="./index.php#contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="burgerResponsive()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <div class="banniere"></div>
        <div class="container-logo"></div>
    </header>

<!-- Articles : Paul ------------------------------------------------->

    <section id="all-card"> 
        <div class="all-card-h2"><h2> Découvrez notre menu et notre carte</h2></div>
        <div class="main-card">
            <article>
                <div class="card">
                    <img src="Images/img-carte.jpg" alt="menu">
                    <h1 class="card-title">Menu midi</h1>
                    <div class="card-visibility">
                        <div class="start">
                            <p class="prix-menu-midi">15 €</p>
                            <p>Entrée : </p>
                            <p>Salade César</p>
                        </div>
                        <div class="plat">
                            <p>Plat :</p>
                            <p>Hamburger</p>
                        </div>
                        <div class="end">
                            <p>Dessert : </p>
                            <p>Moelleux au chocolat</p>
                        </div>
                    </div> 
                    <div class="opacity"></div>
                </div>
                
            </article>
            <article>
                <div class="card">
                    <img src="Images/img-articles-ardoise.jpg" alt="ardoise">
                    <h1 class="card-title">Carte</h1>
                    <div class="card-visibility">
                        <div class="start">
                            <p>Entrées (5€): </p>
                            <p>Salade César / Croquette de brie</p>
                        </div>
                        <div class="plat">
                            <p>Plats (9€):</p>
                            <p>Hamburger / Fish & Chips</p>
                        </div>
                        <div class="end">
                            <p>Desserts (5€): </p>
                            <p>Moelleux au chocolat / Tiramisu</p>
                        </div>
                    </div>
                    <div class="opacity"></div>
                </div>
                
            </article>
        </div>

    </section>

<!-- Plats et prix PHP -->
<section id="prices">
    <?php
        $meals = [
                'Entrées'    => [
                        'Salade César' => [
                                'picture' => 'Images/salade.jpg',
                                'price' => '5€',
                                ],
                        'Croquettes de Brie' => [
                                'picture' => 'Images/croquettes.jpg',
                                'price' => '6€',
                                ],
                        'Assiette de charcuterie' => [
                                'picture' => 'Images/charcuterie.jpg',
                                'price' => '8€',
                                ],
                        ],
                'Plats'     => [
                        'Hamburger' => [
                                'picture' => 'Images/burger.jpg',
                                'price' => '10€',
                                ],
                        'Fish and Chips' => [
                                'picture' => 'Images/fish.jpg',
                                'price' => '12€',
                                ],
                        'Lasagnes' => [
                                'picture' => 'Images/lasagnes.jpg',
                                'price' => '11€',
                                ],
                        ],
                'Desserts' => [
                    'Moelleux au chocolat' => [
                                'picture' => 'Images/moelleux.jpg',
                                'price' => '6€',
                                ],
                    'Tiramisu' => [
                                'picture' => 'Images/tiramisu.jpg',
                                'price' => '7€',
                                ],
                    'Poire belle Hélène' => [
                                'picture' => 'Images/poire.jpg',
                                'price' => '8€',
                                ],
                        ],

                ];

        foreach ($meals as $typeCourse => $courses){
            echo '<h3>' . $typeCourse . '</h3>';
            echo '<div class="type_course">';
            foreach ($courses as $key => $values){
                echo '<div class="course">';
                echo '<h4 class="course_name">' . $key . '</h4>';
                echo '<img src="'. $values['picture'] . '" alt="img">';
                echo '<span class="price">' . $values['price'] . "</span>";
                echo '</div>';
            }
            echo '</div>';
        }
    ?>
</section>

<!-- Formulaire de réservation : Anne -------------------------------------------->
    <section id="booking">
        
        <h2>Réservez votre table en ligne</h2>
        <form action="form.php" method="POST">
            <div class="form1">
                <div class="form_item">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="form_item">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prénom" required>
                </div>
            </div>
            <div class="form1">
                <div class="form_item">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" placeholder="Entrez votre numéro de Téléphone" required pattern="[0-9]{10}">
                </div>
                <div class="form_item">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Entrez votre email" required>
                </div>
            </div>
            <div class="form_item">
                <label for="nb_people">Nombre de personnes <span>(au-delà de 10 personnes appeler directement le restaurant)</span> </label>
                <select name="nb_people" id="nb_people">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="form1">
                <div>
                    <label for="date">Date</label>
                    <!-- pour dire date min aujourd'hui besoin javascript ?-->
                    <input type="date" id="date" name="date" required>
                </div>
                <div>
                    <label for="hour">Heure</label>
                    <select name="hour" id="hour">
                        <option value="20h00">20h00</option>
                        <option value="20h30">20h30</option>
                        <option value="21h00">21h00</option>
                        <option value="21h30">21h30</option>
                    </select>
                </div>
            </div>
            <label for="comment">Commentaire</label>
            <textarea id="comment" name="comment" placeholder="Merci de nous préciser si vous avez des allergies ou un handicap afin que nous puissions vous accueillir au mieux"></textarea>
            <button type="submit" id="booking_button">RESERVER</button>
        </form>

    </section>

<!-- Section livraison: lien vers page2 : Anne ------------------------------------->
    <section id="livraison">
        <h2>Faites-vous livrer à domicile !</h2>
        <div id="link_livraison">
            <a href="./page2.html" target="_blank" id="link">Faites-vous livrer !</a>
            <a href="./page2.html" target="_blank"> <img src="Images/livraison2.jpg" alt="scooter"></a>
        </div>
    </section>

<!-- Footer: Anne   -------------------------------------------------->
    <footer id="contact">
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
            <a href="./page2.html" target="_blank">Formulaire de livraison</a>
        </div>
        <div class="div_img_footer">
            <img src="Images/map.png" alt="access map" id="map_footer"/>
        </div>
        <div id="social">
            <a href="https://www.facebook.com/thecentralpubbastide/"><img src="Images/facebook.svg" alt="logo facebook" class="social_logo" /></a>
            <a href="https://www.instagram.com/thecentralpubbastide/?hl=fr"><img src="Images/insta.svg" alt="logo instagram" class="social_logo"/></a>
            <a href="#"><img src="Images/twitter.svg" alt="logo twitter" class="social_logo"/></a>
        </div>

    </footer>
    
<script src="script.js"></script>
</body>
</html>