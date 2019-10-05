<?php
include_once('../public/header.php');

// Connexion BDD

require_once('../src/connec.php');
$pdo = new \PDO (DSN, USER, PASS);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM drink WHERE id=:id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, \PDO::PARAM_INT);
    $statement->execute();
    header("Location: drinks_list.php?message=La boisson a bien été supprimée");
}
?>

<section class="action_drink">
    <h2>Supprimer une boisson</h2>

    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>"/>
        <h3>Etes-vous sûr de vouloir supprimer cette boisson ?</h3>
        <div id="delete_confirm">
            <button type="submit" class="delete_action">Oui</button>
            <a href="drinks_list.php" class="delete_action">Non</a>
        </div>
    </form>
</section>
