<?php
	include '../config.php';
	include_once '../Model/user.php';
	class userC {




/////..............................Afficher............................../////
		function afficherUser(){
			$sql="SELECT * FROM user";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}




		


/////..............................Supprimer............................../////
		function supprimerUser($id_user){
			$sql="DELETE FROM user WHERE id_user=:id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user', $id_user);   //bind??
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}







/////..............................Ajouter............................../////
		function ajouterUser($user){
			$sql="INSERT INTO user (nom, prenom,adresse,email,roleuser,typeuser,dob) 
			VALUES (:nom,:prenom, :adresse,:email, :roleuser,:typeuser,:dob)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $user->getnom(),
					'prenom' => $user->getprenom(),
					'adresse' => $user->getadresse(),
					'email' => $user->getemail(),
					'roleuser' => $user->getroleuser(),
					'typeuser' => $user->gettypeuser(),
					'dob' => $user->getdob(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}







/////..............................Affichage par la cle Primaire............................../////
		function recupererUser($id_user){
			$sql="SELECT * from user where id_user=$id_user";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		




/////..............................Update............................../////
		function modifierUser($user, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE user SET nom = :nom, prenom = :prenom, adresse = :adresse, email = :email, roleuser = :roleuser, typeuser = :typeuser, dob = :dob WHERE id_user= :id');
				$query->execute([
					'nom' => $user->getnom(),
					'prenom' => $user->getprenom(),
					'adresse' => $user->getadresse(),
					'email' => $user->getemail(),
					'roleuser' => $user->getroleuser(),
					'typeuser'=>$user->gettypeuser(),
					'dob' => $user->getdob(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}
?>
