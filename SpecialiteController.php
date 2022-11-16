<?PHP
include_once("config.php");
class specialiteController {
    function afficher()
	{
		$db=config::getConnexion();
		$sql="select * from specialite";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}	
	function ajouter($specialite)
	{	
		$sql="insert into specialite (nom_specialite) values (:nom_specialite) ";
		$db=config::getConnexion();			
		$req=$db->prepare($sql);
		$req->bindValue(':nom_specialite',$specialite->getNom_specialite());
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
	$sql="delete from specialite where id= :id";
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
}
