<?php
include '../controller/offresC.php';
$offresC = new offresC();
$offresC->deleteoffres($_GET["id_offres"]);
header('Location:Listoffres.php');
?>