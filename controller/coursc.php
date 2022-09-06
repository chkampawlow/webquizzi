<?PHP
	include "./config.php";
	require_once './model/cours.php';


    class coursc {
		
		function ajoutercours($cours){
				$pdo =config::getConnexion ();
				try{    
					$query =$pdo->prepare(
                        "INSERT INTO cours ( nomcours, typecours, coursdes) 
                        VALUES ( :nomcours, :typecours :coursdes)");
                       $query->execute([
                           'nomcours' => $cours->getnomcours(),
                           'typecours' => $cours->gettypecours(),
                           'coursdes' => $cours->getcoursdes()
                       ]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		public function affichercours() {
            $sql="SELECT * FROM cours";
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