<?php
include '../model/config.php';
include '../model/avis_offres2.php';

class avis_offresC
{
    public function listavis_offres()
    {
        $sql = "SELECT * FROM avis_offres";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteavis_offres($id_avis)
    {
        $sql = "DELETE FROM avis_offres WHERE id_avis = :id_avis";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_avis', $id_avis);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addavis_offres($avis_offres)
    {
        $sql = "INSERT INTO avis_offres  
        VALUES (NULL, :n,:em, :me,:id)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'n' => $avis_offres->getnom(),
                'em' => $avis_offres->getemail(),
                'me' => $avis_offres->getmessage(),
                'id' => $avis_offres->getid_offres(),
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateavis_offres($avis_offres, $id_avis)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE avis_offres SET 
                    nom = :nom, 
                    email = :email,
                    message= :message,
                    id_offres= :id_offres  
                WHERE id_avis= :id_avis'
            );
            $query->execute([
                'id_avis' => $id_avis,
                'nom' => $avis_offres->getnom(),
                'email' => $avis_offres->getemail(),
                'message' => $avis_offres->getmessage(),
                'id_offres' => $avis_offres->getid_offres()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showavis_offres($id_avis)
    {
        $sql = "SELECT * from avis_offres where id_avis = $id_avis";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $avis_offres = $query->fetch();
            return $avis_offres;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
   
}
