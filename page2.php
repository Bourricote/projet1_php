
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

        <?php include_once ("nav.php");?>

        <!------------------------------------------------------------------------------------------------>
        
        
        
        <section class="section-p2">
            <form method="post" action="index.php" class="p2">
                <div class="adress-page2">
                    <label for="numero-page2">Indiquez votre adresse :</label><br>
                    <input type="text" name="numero" id="numero-page2" placeholder="1-2Bis" required/>
                    <input type="text" name="rue" id="rue-page2" placeholder="rue Jean-Michel Papin" required/><br>                                 
                    <input type="text" name="code" id="code-page2" placeholder="33000" required/>
                    <input type="text" name="ville" id="ville-page2" placeholder="Bordeaux" required/><br>
                </div>
                <p>
                    <textarea name="comments" id="comments-page2" cols="35" rows="3" placeholder="Précisions supplémentaires : numéro d'interphone, etc"></textarea>
                </p>

                <p class="menu-page2">
                    <input type="radio" name="choix" id="midi-page2" /> 
                    <label for="nbmidi-page2">Menu Midi 15€</label><br> 
                    <input type="number" class="nbmidi-page2" id="nbmidi-page2" min="0" max="10" step=1 value="0"  /><br>               
                </p>
                
                <p class="choix-page2">  
                    <input type="radio" name="choix" id="carte-page2" /> 
                    <label for="entree-page2">A la Carte</label><br />
                    <label for="plat-page2">Choississez vos plats :</label><br>
                    <select name="entree" id="entree-page2">                    
                        <option value="" disabled selected>Entrées</option>
                        <option value="salade">Salade César 5€</option>
                        <option value="croquette">Croquettes de Brie 5€</option>
                    </select>
                    <input type="number" class="nb-page2" id="nb-page2" min="0" max="10" step=1 value="0"  /><br>

                    <select name="plat" id="plat-page2">                    
                        <option value="" disabled selected>Plats</option>
                        <option value="hamburger">Hamburger 9€</option>
                        <option value="f&c">Fish & Chips 9€</option>
                    </select>
                    <input type="number" class="nb-page2" min="0" max="10" step=1 value="0"  /><br>

                    <select name="dessert" id="dessert-page2">
                        <option value="" disabled selected>Desserts</option>
                        <option value="chocolat">Meolleux au chocolat 5€</option>
                        <option value="tiramisu">Tiramisu 5€</option>
                    </select>
                    <input type="number" class="nb-page2" min="0" max="10" step=1 value="0"  /><br>
                    
                    <select name="boisson" id="boisson-page2">                    
                        <option value="" disabled selected>Boissons</option>
                        <option value="bière">Bière 1664 25cl 3€</option>
                        <option value="citron">Citronnade maison 3€</option>
                        <option value="pepper">Dr Pepper 33cl 3€</option>
                        <option value="eau">Eau minérale 33cl 2€</option>
                    </select>
                    <input type="number" class="nb-page2" min="0" max="10" step=1 value="0"  /><br>
                </p>
                <p class="livraison-page2">
                    <label for="livraison-page2">Heure de livraison souhaitée :</label><br>
                    <select name="livraison" id="livraison-page2">
                        <option value="tot" selected>Au plus tôt</option>
                        <option value="1930">Entre 19h30 et 20h</option>
                        <option value="2000">Entre 20h et 20h30</option>
                        <option value="2030">Entre 20h30 et 21h</option>
                    </select><br>
                </p>
                <p class="button-page2">
                    <button class="js" onclick="confirm()">Envoyer</button>
                </p>
            </form>
            
        </section>

        <?php include_once("footer.php");?>
    </body>

    </html>