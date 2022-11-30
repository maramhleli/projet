<?php

include '../controller/offresC.php';

$error = "";

// create offres
$offres = null;

// create an instance of the controller
$offresC = new offresC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["code_promo"])  &&
    isset($_POST["plats"])  &&
    isset($_POST["prix"])  &&
    isset($_POST["remise"])  
       
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["code_promo"]) &&
        !empty($_POST["plats"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["remise"])

    ) {
        $offres = new offres(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['code_promo'],
            $_POST['plats'],
            $_POST['prix'],
            $_POST['remise']
        
        );
        $offresC->addoffres($offres);
        header('Location:Listoffres.php');
    } else
        $error = "Missing information";
}


?>