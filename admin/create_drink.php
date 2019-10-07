<?php
include_once('../public/header.php');

// Connexion BDD

require_once('../src/connec.php');
$pdo = new \PDO (DSN, USER, PASS);

// Vérification du formulaire et ajout d'une ligne dans la table avec les inputs de l'utilisateur

$newDrinkName = '';
$newDrinkNameError = '';
$newDrinkPrice = '';
$newDrinkPriceError = '';

$errors = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['new_drink_name'])) {
        $newDrinkNameError = 'Nom obligatoire';
        $errors += 1;
    } else {
        $newDrinkName = $_POST['new_drink_name'];
        if (strlen($newDrinkName) >= 100) {
            $newDrinkNameError = 'Seulement 100 lettres';
            $errors += 1;
        }
    }

    if (empty($_POST['new_drink_price'])) {
        $newDrinkPriceError = 'Prix obligatoire';
        $errors += 1;
    }

    if ($errors === 0) {
        // ajout ligne BDD
        $newDrinkName = trim($_POST['new_drink_name']);
        $newDrinkPrice = trim($_POST['new_drink_price']);

        $query = "INSERT INTO drink (name, price) VALUES (:name, :price)";
        $statement = $pdo->prepare($query);

        $statement->bindValue(':name', $newDrinkName, \PDO::PARAM_STR);
        $statement->bindValue(':price', $newDrinkPrice, \PDO::PARAM_STR);

        $statement->execute();

        // redirection
        if ($errors === 0){
            header("Location: drinks_list.php?message=La boisson a bien été ajoutée");
            exit();
        }
    }
}

?>

<section class="action_drink">
    <h2>Ajouter une boisson</h2>
    <form id="new_drink_form" action="create_drink.php" method="post">
        <div>
            <label for="new_drink_name">Nom :</label>
            <input type="text" id="new_drink_name" name="new_drink_name" required>
            <span><?= $newDrinkNameError ?></span>
        </div>
        <div>
            <label for="new_drink_price">Prix :</label>
            <input type="text" id="new_drink_price" name="new_drink_price" required>
            <span><?= $newDrinkPriceError ?></span>
        </div>
        <div>
            <button class="action_button" type="submit">Enregistrer la nouvelle boisson</button>
        </div>
    </form>
</section>
