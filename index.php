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

    <?php include_once ("nav.php");?>

    <div class="banniere"></div>
    <div class="container-logo"></div>


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
        <?php include_once('plats.php');?>
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
                    <input type="tel" id="phone" name ="phone" placeholder="Entrez votre numéro de Téléphone" required pattern="[0-9]{10}">
                </div>
                <div class="form_item">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
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
            <input type="submit" id="booking_button" value="Réserver">
        </form>

    </section>

<!-- Section livraison: lien vers page2 : Anne ------------------------------------->
    <section id="livraison">
        <h2>Faites-vous livrer à domicile !</h2>
        <div id="link_livraison">
            <a href="page2.php" target="_blank" id="link">Faites-vous livrer !</a>
            <a href="page2.php" target="_blank"> <img src="Images/livraison2.jpg" alt="scooter"></a>
        </div>
    </section>

<!-- Footer: Anne   -------------------------------------------------->
    <?php include_once("footer.php");?>
    
<script src="script.js"></script>
</body>
</html>