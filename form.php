
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

        <?php include_once("nav.php");?>

        <section id="form_inputs">

            <!-- Vérifie si les différents champs du formulaire sont bien remplis -->
            <?php
            $isFormComplete = true;
            $errorMessage = 'Merci de renseigner votre ' . '<br>';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(empty($_POST['name'])){
                    $isFormComplete = false;
                    $errorMessage .= 'nom' . '<br>';
                }
                if(empty($_POST['first_name'])){
                    $isFormComplete = false;
                    $errorMessage .= 'prénom' . '<br>';
                }
                if(preg_match('#[0-9]{10}#', $_POST['phone']) === 0){
                    $isFormComplete = false;
                    $errorMessage .= 'votre numéro de téléphone (10 chiffres de 0 à 9)' . '<br>';
                }
                if(preg_match('#[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})#', $_POST['email']) === 0){
                    $isFormComplete = false;
                    $errorMessage .= 'une adresse email valide';
                }
            } else {
                $isFormComplete = false;
                exit('Invalid Request');
            }

            //Si formulaire bien rempli, affiche message de remerciement
            if ($isFormComplete) : ?>

            <h2 id="thank_message"> <?php echo 'Merci ' . $_POST['first_name'] . ' ' . $_POST['name'] . ', votre réservation pour le '. date("d M Y", strtotime($_POST['date'])) . ' à ' . $_POST['hour'] . ' pour ' . $_POST['nb_people'] . ' personnes' . ' a bien été prise en compte !'; ?></h2>
            <p id="form_message">
                <?php
                    if(!empty($_POST['comment'])) {
                        echo 'Votre message à notre attention :<br>';
                        echo $_POST['comment'];
                    }
                ?>
            </p>

            <!-- Sinon affiche message d'erreur -->
            <?php else : ?>

                <p id="form_message">
                    <?php
                    echo $errorMessage;
                    ?>
                </p>

            <?php endif; ?>

        </section>

        <!-- Insère les données du formulaire dans un fichier .text différent chaque jour -->
        <?php
            if(isset($_POST['name']))
            {
                $string = '';
                foreach ($_POST as $key => $data){
                    $string .= $_POST[$key];
                    if ($key != 'comment'){
                        $string .= ', ';
                    }
                }

                $file = date("Y-m-d") . '-bookings.txt';
                $isStringInFile = file_put_contents($file, $string ."\n", FILE_APPEND | LOCK_EX);
                if($isStringInFile === false) {
                    die('There was an error writing this file');
                }
            }
            else {
                die('no post data to process');
            }
        ?>

        <?php include_once("footer.php");?>

    </body>

    </html>