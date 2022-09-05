<?php
include 'model/question.php';
include 'controller/questionc.php';
include_once 'config.php';


$questionc=new questionc();
$question=$questionc->afficherquest(10); 
$sql="SELECT * FROM question ";
$db = config::getConnexion();
    $liste = $db->query($sql);
    $number = $liste -> execute();
    $reponse = $liste -> fetchall() ;
    $score = 0;
    foreach($question as $row)
    {
      
      $x=  $_GET[$row['idquest']];
      echo "|",$x,"|";                     
      if( $x === $row['repv'])
      {
          $score =$score+1;
          
          
      }
      
    }
    {

      
    }
    echo $score;
    ?>