<?php
include_once 'config.php';
$pdo=config::getConnexion();
session_start();
if(isset($_POST['btnLogin']))
{
	$email = $_POST['email'];
	$passwords    = md5($_POST['passwords']);
	if(!empty($email) && !empty($passwords)){
			
		$slt="select * from util where email=:email and passwords=:passwords";
		$query = $pdo ->prepare($slt);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':passwords',$passwords,PDO::PARAM_STR);
		$query->execute();
		$row=$query->fetch(PDO::FETCH_ASSOC);
		if(is_array($row))
		{
			$_SESSION["idutil"] = $row['idutil'];
			$_SESSION["email"]=$row['email'];
			$_SESSION["first_name"]=$row['first_name'];
			$_SESSION["last_name"]=$row['last_name'];
			$_SESSION["typeutil"]=$row['typeutil'];
			header("Location: index.php"); 
			
      var_dump($_SESSION); 
	  echo $_SESSION["typeutil"];
		}
		else
		{
			$msg="invalid login credentials";
			//header ("Location: login.php?error=".$msg);	
			exit;
		}
    }
	else{
		$msg="All fields are mandatory";
		//header ("Location: index.php?error=".$msg);	
		exit;
	}
}
?>