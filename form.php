
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

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(empty($_POST['name'])){
                    echo '<p>' . 'Merci de renseigner votre nom' . '</p>';
                }
                if(empty($_POST['first_name'])){
                    echo 'Merci de renseigner votre prénom';
                }
                if(preg_match('#[0-9]{10}#', $_POST['phone']) === 0){
                    echo 'Merci de renseigner votre numéro de téléphone (10 chiffres de 0 à 9)';
                }
                if(preg_match('#[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})#', $_POST['email']) === 0){
                    echo 'Merci de renseigner une adresse email valide';
                }
            } else {
                exit('Invalid Request');
            }

        ?>

        <section id="form_inputs">
            <h2 id="thx"> <?php echo 'Merci ' . $_POST['first_name'] . ' ' . $_POST['name'] . ', votre réservation pour le '. date("d M Y", strtotime($_POST['date'])) . ' à ' . $_POST['hour'] . ' pour ' . $_POST['nb_people'] . ' personnes' . ' a bien été prise en compte !'; ?></h2>
            <p id="form_message">
                <?php
                    echo 'Votre message à notre attention :<br>';
                    echo $_POST['comment'];
                ?>
            </p>
        </section>

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

                $file = date("d-m-Y") . '-bookings.txt';
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