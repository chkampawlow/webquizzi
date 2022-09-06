<?PHP
include "C://xampp/htdocs/quizzi/config.php";
require_once 'C://xampp/htdocs/quizzi/model/cours.php';

class courC
{

    public function ajoutercour($cour)
    {
        $sql = "INSERT INTO cours(nomcours,typecours,cours) 
			VALUES (:nomcours,:typecours,:cours)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomcours' => $cour->getnomcours(),
                'typecours' => $cour->gettypecours(),
                'cours' => $cour->getcours()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function affichercour()
    {

        $sql = "SELECT * FROM cours";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimercour($id)
    {
        $sql = "DELETE FROM cours WHERE idcours = :idcours";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idcours', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifiercours($cour, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE cours SET 
						nomcours = :nomcours, 
						typecours = :typecours,
						cours = :cours
					WHERE idcours = $id"
            );
            $query->execute([
                'nomcours' => $cour->getnomcours(),
                'typecours' => $cour->gettypecours(),
                'cours' => $cour->getcours(),         
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            var_dump($query);
            
        }
    }
    
    function recuperercour($id)
    {
        $sql = "SELECT * from cours where idcours=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

                    
}
