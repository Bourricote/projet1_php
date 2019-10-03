<?php
// Connexion BDD

require_once ('../src/connec.php');
$pdo = new \PDO (DSN,USER,PASS);



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
        if (!preg_match("/^[a-zA-Z ]{1,100}$/", $newDrinkName)) {
            $newDrinkNameError = 'Seulement 45 lettres sans accents et espaces';
            $errors += 1;
        }
    }

    if (empty($_POST['new_drink_price'])) {
        $newDrinkPriceError = 'Prix obligatoire';
        $errors += 1;
    }

    if ($errors === 0){
        $newDrinkName = trim($_POST['new_drink_name']);
        $newDrinkPrice = trim($_POST['new_drink_price']);

        $query = "INSERT INTO drink (name, price) VALUES (:name, :price)";
        $statement = $pdo->prepare($query);

        $statement->bindValue(':name', $newDrinkName, \PDO::PARAM_STR);
        $statement->bindValue(':price', $newDrinkPrice, \PDO::PARAM_INT);

        $statement->execute();

        echo 'La boisson a bien été ajoutée à la base de données';
    }
}
?>

<h2>Ajoutez une boisson</h2>
<form action="new_drink.php" method="post">
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
    <button type="submit">Enregistrer la nouvelle boisson</button>
</form>