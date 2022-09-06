<?PHP
  include_once "./model/cours.php";
  include_once "./controller/coursc.php";
  include_once "./config.php";
  $error="";
    // create cours
    $cours = null;
    $nbr = 0 ;
    // create an instance of the controller
    $coursc = new coursc();
    if (
        isset($_POST["nomcours"]) && 
        isset($_POST["typecours"]) && 
        isset($_POST["coursdes"]) 
    ) {
        if (
            !empty($_POST["nomcours"]) && 
            !empty($_POST["typecours"]) && 
            !empty($_POST["coursdes"])
        ) {
            $cours = new cours(
                $_POST['nomcours'],
                $_POST['typecours'],
                $_POST['coursdes']
            );

        }
        else
            $error = "Missing information"; 
    }
    var_dump($cours);
    $coursc->ajoutercours($cours);
    
    //header('Location: ajouterquestion.html');
?>