<?php

//Vérifie la validité du formulaire

$isFormComplete = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_POST['name'])){
        $isFormComplete = false;
        $nameErr = 'Merci de renseigner votre nom';
    } else {
        $name = $_POST['name'];
    }

    if(empty($_POST['first_name'])){
        $isFormComplete = false;
        $first_nameErr = 'Merci de renseigner votre prénom';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['phone'])) {
        $phoneErr = 'Merci de renseigner votre numéro de téléphone';
        $isFormComplete = false;
    } else {
        $phone = $_POST['phone'];
        if (!preg_match("/[0-9]{10}/", $_POST["phone"])) {
            $phoneErr = 'Merci de renseigner un numéro de téléphone valide (10 chiffres)';
            $isFormComplete = false;
        }
    }

    if (empty($_POST['email'])) {
        $isFormComplete = false;
        $emailErr = 'Merci de renseigner votre adresse mail';
    } else {
        $email = $_POST['email'];
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Merci de renseigner une adresse email valide';
            $isFormComplete = false;
        }
    }
}

//Insère les données du formulaire dans un fichier .text différent chaque jour

if(isset($_POST['name'])) {
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
