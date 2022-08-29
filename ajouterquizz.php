<?PHP
  include_once "./model/quizz.php";
  include_once "./controller/quizzc.php";
  include_once "./config.php";
  $error="";
    // create user
    $user = null;
    $nbr = 0 ;
    // create an instance of the controller
    $userc = new quizzc();
    if (
        isset($_POST["nomquizz"]) && 
        isset($_POST["nbquest"]) 
    ) {
        if (
            !empty($_POST["nomquizz"]) && 
            !empty($_POST["nbquest"])
        ) {
            $user = new quizz(
                $_POST['nomquizz'],
                $_POST['nbquest']
            );

        }
        else
            $error = "Missing information";
    }

    $userc->ajouterquizz($user);

    header('Location: ajouterquestion.html');
?>