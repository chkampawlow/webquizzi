<?php
include_once 'config.php';
include "controller/utilc.php";
include_once 'model/util.php';

    session_start();
    $utilc = new utilc();
    $error = "";
    $x=(int)$_SESSION["idutil"];
    var_dump(is_int($x));

if (
  isset($_POST["first_name"])&& 
      isset($_POST["last_name"])&&
      isset($_POST["email"])
){
  if (
          !empty($_POST["first_name"])&& 
          !empty($_POST["last_name"])&& 
          !empty($_POST["email"])
      ) {
          $util = new util(
            
              $_POST['first_name'],
              $_POST['last_name'], 
              $_POST['email']
          );
    
          $utilc->modifierUtilisateur($util, $x);
          //header('refresh:5;url=index.php');
          //header('Location:modifierutil.php');
      }
      else
          $error = "Missing information";
}
echo $_POST["first_name"];
echo $_POST["last_name"];
echo $_POST["email"];

  
?>