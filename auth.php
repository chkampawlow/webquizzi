<?php
include_once 'config.php';
$pdo=config::getConnexion();
session_start();
if(isset($_POST['btnLogin']))
{
	$email = $_POST['email'];
	$password    = md5($_POST['password']);
	if(!empty($email) && !empty($password)){
			
		$slt="select * from util where email=:email and password=:password";
		$query = $pdo ->prepare($slt);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':password',$password,PDO::PARAM_STR);
		$query->execute();
		$row=$query->fetch(PDO::FETCH_ASSOC);
		if(is_array($row))
		{
			$_SESSION["idutil"] = $row['idutil'];
			$_SESSION["email"]=$row['email'];
			$_SESSION["first_name"]=$row['first_name'];
			$_SESSION["last_name"]=$row['last_name'];
			header("Location: index.php"); 
      var_dump($_SESSION); 

		}
		else
		{
			$msg="invalid login credentials";
			header ("Location: login.php?error=".$msg);	
			exit;
		}
    }
	else{
		$msg="All fields are mandatory";
		header ("Location: index.php?error=".$msg);	
		exit;
	}
}
?>