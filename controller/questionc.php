<?PHP
	include_once "./config.php";
	require_once './model/question.php';

    class questionc {
		
        public function afficherquest($idquizz) {
            $sql="SELECT * FROM question WHERE idquizz= $idquizz";
                $db = config::getConnexion();
                try{
                    $liste = $db->query($sql);
                    return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }	
        }
	}

    ?>