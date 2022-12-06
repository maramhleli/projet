<?php
include '../model/config.php';
include '../model/offres2.php';

class offresC
{
    public function listoffres()
    {
        $sql = "SELECT * FROM offres";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteoffres($id_offres)
    {
        $sql = "DELETE FROM offres WHERE id_offres = :id_offres";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_offres', $id_offres);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addoffres($offres)
    {
        $sql = "INSERT INTO offres  
        VALUES (NULL, :n,:pn,:em, :co, :pl,:pr,:re)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'n' => $offres->getnom(),
                'pn' => $offres->getprenom(),
                'em' => $offres->getemail(),
                'co' => $offres->getcode_promo(),
                'pl' => $offres->getplats(),
                'pr' => $offres->getprix(),
                're' => $offres->getremise(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateoffres($offres, $id_offres)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE offres SET 
                    nom = :nom,
                    prenom = :prenom, 
                    email = :email,
                    code_promo= :code_promo,  
                    plats = :plats,
                    prix = :prix,
                    remise = :remise
                WHERE id_offres= :id_offres'
            );
            $query->execute([
                'id_offres' => $id_offres,
                'nom' => $offres->getnom(),
                'prenom' => $offres->getprenom(),
                'email' => $offres->getemail(),
                'code_promo' => $offres->getcode_promo(),
                'plats' => $offres->getplats(),
                'prix' => $offres->getprix(),
                'remise' => $offres->getremise()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showoffres($id_offres)
    {
        $sql = "SELECT * from offres where id_offres = $id_offres";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $offres = $query->fetch();
            return $offres;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
