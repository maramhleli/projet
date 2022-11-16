<?php
	include '../Controller/userC.php';
	$userC=new userC();
	$userC->supprimerUser($_GET["id_user"]);
	header('Location:AfficheListeuser.php');
?>