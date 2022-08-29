<?PHP
  include_once "./model/login.php";
  include_once "./controller/loginc.php";
  include_once "./config.php";
  $error="";
    // create user
    $user = null;
    // create an instance of the controller
    $userc = new loginc();
    if (
        isset($_POST["nomutil"]) && 
        isset($_POST["mail"]) && 
        isset($_POST["pass"])
    ) {
        if (
            !empty($_POST["nomutil"]) && 
            !empty($_POST["mail"]) && 
            !empty($_POST["pass"])
        ) {
            $user = new login(
                $_POST['nomutil'],
                $_POST['mail'],
                $_POST['pass']
            );
        }
        else
            $error = "Missing information";
    }

    $userc->ajouterlogin($user);
    header('Location: index.html');
?>