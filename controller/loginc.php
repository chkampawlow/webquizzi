<?PHP
	include_once './config.php';
	require_once './model/login.php';
	require_once 'ajouterutil.php';

	class loginC {
		
		function ajouterlogin($Utilisateur){
				$pdo =config::getConnexion ();
				try{    
					$query =$pdo->prepare(
				 "INSERT INTO util ( nomutil, mail, pass) 
				 VALUES ( :nomutil, :mail, :pass)");
				$query->execute([
					'nomutil' => $Utilisateur->getnomutil(),
					'mail' => $Utilisateur->getmail(),
					'pass' => $Utilisateur->getpass(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
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

		function supprimerlogin($idutil){
			$sql="DELETE FROM util WHERE idutil = :idutil ";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindParam(":idutil", $idutil);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierlogin($Utilisateur, $idutil){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE util SET 
						nomutil = :nomutil, 
						mail = :mail,
						pass = :pass,
						typ = :typ
		

					WHERE idutil = :idutil'
				);
				$query->execute([
					'nomutil' => $Utilisateur->getnomutil(),
					'mail' => $Utilisateur->getmail(),
					'pass' => $Utilisateur->getpass(),
					'typ' => $Utilisateur->gettyp(),

					'idutil' => $idutil
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererlogin($idutil){
			$sql="SELECT * from util where idutil=$idutil";
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

		function recupererlogin1($idutil){
			$sql="SELECT * from Utilisateur where idutil=$idutil";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>