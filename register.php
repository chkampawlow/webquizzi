<?php
	include('config.php');
  $pdo=config::getConnexion();
if(isset($_POST['btnRegister']))
{

	$email = $_POST['email'];
	
	$slt="select * from util where email=:email";
	$query=$pdo->prepare($slt);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->execute();
	$row=$query->fetch(PDO::FETCH_ASSOC);
		
	if($query->rowCount() > 0)
	{
		$msg="Email Id Already Exists";
		header ("Location: login.php?error=".$msg);	
		exit;
	}
	else
	{
		$first_name  = $_POST['firstname'];
		$last_name   = $_POST['lastname'];
		$passwords    = md5($_POST['passwords']);
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($passwords)){					
			$sql="insert into util (first_name,last_name,email,passwords) values(:first_name,:last_name,:email,:passwords)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':first_name',$first_name,PDO::PARAM_STR);
			$query->bindParam(':last_name',$last_name,PDO::PARAM_STR);
			$query->bindParam(':email',$email,PDO::PARAM_STR);
			$query->bindParam(':passwords',$passwords,PDO::PARAM_STR);
			$query->execute();
	
			$msg="your account has been registered successfully";
			header('location:index.php?success='.$msg);
			exit;
		}
		else{
			$msg="All fields are mandatory";
			header ("Location: login.php?error=".$msg);	
			exit;
		}
	}	
}

?>