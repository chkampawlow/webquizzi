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
        public function quizzscore($idquizz,$rep,$score) {
            $sql="SELECT * FROM question ";
                $db = config::getConnexion();
                    $liste = $db->query($sql);
                    $number = $liste -> execute();
                    $reponse = $liste -> fetchall() ;
                    //var_dump($reponse);
                    foreach($reponse as $row){
                       
                     echo "rep|",$rep,"|";
                     echo "row|",$row['repv'],"|";?><html><br></html><?php
                    if( $rep === $row['repv'])
                    {
                        $score =$score+1;
                        
                        
                    }
                    return $score;
                    }
        }
	}

    ?>