<?PHP
include_once("config.php");
class platController {
    function afficher()
	{
		$db=config::getConnexion();
		$sql="select * from plats";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function getPlatByID($id)
	{
		$db=config::getConnexion();
		$sql="select * from plats where id=".$id;
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function ajouter($plat)
	{	
		$sql="insert into plats (nom_plat,prix,id_specialite) values (:nom,:prix,:id_sp) ";
		$db=config::getConnexion();			
		$req=$db->prepare($sql);
		$req->bindValue(':nom',$plat->getNom_plat());
		$req->bindValue(':prix',$plat->getPrix());
		$req->bindValue(':id_sp',$plat->getId_specialite());

		try
		{
			$req->execute();
		}
		catch (Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}

	}	

function supprimer($id)
{
	$sql="delete from plats where id= :id";
	$db=config::getConnexion();			
	$req=$db->prepare($sql);
	$req->bindValue(':id',$id);
	try
	{
		$req->execute();
	}
	catch (Exception $e)
	{
		die('Erreur:'.$e->getMessage());
	}

}
function modifierplat($plat,$id){
	$sql="UPDATE plats SET  nom_plat=:nom_plat,prix=:prix, id_specialite=:id_specialite WHERE id=:id";
	$db = config::getConnexion();
try{		
	$req=$db->prepare($sql);
	$nom_plat=$plat->getNom_plat();
	$prix=$plat->getPrix();
	$id_specialite=$plat->getId_specialite();
	
	$req->bindValue(':id',$id);
	$req->bindValue(':nom_plat',$nom_plat);
	$req->bindValue(':prix',$prix);
	$req->bindValue(':id_specialite',$id_specialite);
	
		$s=$req->execute();
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
	}
}
}
