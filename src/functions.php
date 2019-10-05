<?php

//Vérifie la validité du formulaire

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$isFormComplete = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_POST['name'])){
        $isFormComplete = false;
        $nameErr = 'Merci de renseigner votre nom';
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[\p{L}-]{1,100}$/u", $name)) {
            $nameErr = 'Seulement 100 lettres';
            $$isFormComplete = false;
        }
    }

    if(empty($_POST['first_name'])){
        $isFormComplete = false;
        $first_nameErr = 'Merci de renseigner votre prénom';
    } else {
        $first_name = test_input($_POST['first_name']);
        if (!preg_match("/^[\p{L}-]{1,100}$/u", $first_name)) {
            $first_nameErr= 'Seulement 100 lettres';
            $isFormComplete = false;
        }
    }

    if(empty($_POST['phone'])) {
        $phoneErr = 'Merci de renseigner votre numéro de téléphone';
        $isFormComplete = false;
    } else {
        $phone = test_input($_POST['phone']);
        if (!preg_match("/[0-9]{10}/", $_POST["phone"])) {
            $phoneErr = 'Merci de renseigner un numéro de téléphone valide (10 chiffres)';
            $isFormComplete = false;
        }
    }

    if (empty($_POST['email'])) {
        $isFormComplete = false;
        $emailErr = 'Merci de renseigner votre adresse mail';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Merci de renseigner une adresse email valide';
            $isFormComplete = false;
        }
    }

    //Insère les données du formulaire dans un fichier .text différent chaque jour

    if($isFormComplete) {
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
}

// Connexion à la base de données pdo_projet1

require_once ('connec.php');
$pdo = new \PDO (DSN,USER,PASS);

// Création liste de boissons à partir de la base de données

$query = "SELECT * FROM drink";
$statement = $pdo->query($query);
$drinks = $statement->fetchAll(PDO::FETCH_ASSOC);

