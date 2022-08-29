<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=quizzi", "root", "");
$query = "
INSERT INTO question 
(quest, rep1, rep2, rep3, repv, idquizz) 
VALUES (:quest, :rep1, :rep2, :rep3, :repv, :idquizz)
";

$result = $connect -> prepare("SELECT MAX(idquizz) FROM quizz");
$number = $result -> execute();
$number = $result -> fetchColumn() ;
$number = intval($number);
echo $number;

 for($count = 0; $count<count($_POST['hidden_quest']); $count++)
{
	$data = array(
		':quest'	=>	$_POST['hidden_quest'][$count],
		':rep1'	=>	$_POST['hidden_rep1'][$count],
		':rep2'	=>	$_POST['hidden_rep2'][$count],
		':rep3'	=>	$_POST['hidden_rep3'][$count],
		':repv'	=>	$_POST['hidden_repv'][$count],
		':idquizz'	=>	$number

	);
	$statement = $connect->prepare($query);
	$statement->execute($data);

}  

?>