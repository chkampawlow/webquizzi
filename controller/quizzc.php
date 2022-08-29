<?PHP
	include_once "./config.php";
	require_once './model/quizz.php';
	require_once 'ajouterquizz.php';

    class quizzc {
		
		function ajouterquizz($Utilisateur){
				$pdo =config::getConnexion ();
				try{    
					$query =$pdo->prepare(
				 "INSERT INTO quizz ( nomquizz, nbquest) 
				 VALUES ( :nomquizz, :nbquest)");
				$query->execute([
					'nomquizz' => $Utilisateur->getnomquizz(),
					'nbquest' => $Utilisateur->getnbquest(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    }
	function afficherlogins(){
			
		$sql="SELECT * FROM util";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

    ?>