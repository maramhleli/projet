<?php
include '../configuration_of.php';
function afficheroffres(){
			$sql="SELECT * FROM offres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimeroffres($code_promo){
			$sql="DELETE FROM offres WHERE code_promo=:code_promo";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':code_promo', $code_promo);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouteroffres($offres){
			$sql="INSERT INTO offres (code_promo, message) 
			VALUES ( :code_promo, :message)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'code_promo' => $offres->getcode_promo(),
                    'message' => $offres->getmessage()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereroffres($code_promo){
			$sql="SELECT * from offres where code_promo=$code_promo";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offres=$query->fetch();
				return $offres;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieravis($offres, $code_promo){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offres SET 
		                code_promo= :code_promo,
                        message= :message
					WHERE code_promo= :code_promo'
				);
				$query->execute([
                    'code_promo' => $offres->getid_user(),
                    'message' => $offres->getmessage(),
                    'code_promo' => $code_promo
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}


        ?>