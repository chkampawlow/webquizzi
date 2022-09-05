<?php
	include_once "./config.php";
require_once './model/util.php';

class utilc{
function modifierUtilisateur($util,$idutil){
    $idutil=(int)$_SESSION["idutil"];
    var_dump($idutil);
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                "UPDATE util SET first_name = :first_name, last_name = :last_name, email = :email WHERE idutil = $idutil");
            $query->execute([
                'first_name' => $util->getfirst_name(),
                'last_name' => $util->getlast_name(),
                'email' => $util->getEmail()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
    ?>