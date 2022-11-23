<?php
include '../controller/avis_offresC.php';
$avis_offresC = new avis_offresC();
$avis_offresC->deleteavis_offres($_GET["id_avis"]);
header('Location:Listavis_offres.php');
?>