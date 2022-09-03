<?php
include 'model/question.php';
include 'controller/questionc.php';
include_once 'config.php';


$questionc=new questionc();
$question=$questionc->afficherquest(10); 
$score = 0;
    foreach($question as $row)
    {
      
      $x=  $_GET[$row['idquest']];
      echo "|",$x,"|";                     
      $score=$questionc->quizzscore('10',$x,$score);
      
    }
    echo $score;
    ?>