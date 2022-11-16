<?PHP
include "../contoller/offre1.php";
$paniercore=new paniercore();
if (isset($_POST["code_promo"])){
	$paniercore->supprimer($_POST["code_promo"]);
	//header('Location: index.php');
}

?>