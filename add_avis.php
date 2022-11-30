<?php

include '../controller/avis_offresC.php';

$error = "";

// create offres
$avis_offres = null;

// create an instance of the controller
$avis_offresC=new avis_offresC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["message"]) &&
    isset($_POST["id_offres"]) 


       
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["message"]) &&
        !empty($_POST["id_offres"]) 


    ) {
        $avis_offres = new avis_offres(
            $_POST['nom'],
            $_POST['email'],
            $_POST['message'],
            $_POST['id_offres']
        
        );
        $avis_offresC->addavis_offres($avis_offres);
        header('Location:Listavis_offres.php');
    } else
        $error = "Missing information";
}


?>