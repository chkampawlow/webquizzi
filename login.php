<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Neumorphism Login Form</title>
  <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="login.php">Register</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	 <?php $idutil= $_SESSION["idutil"];	if ($idutil): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link"  href="dashboard.php">Dashboard</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
     <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Register</a>
          </li>
        </ul>
      <?php endif; ?> 
      </div>
      </div>
    </nav>
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" id="a-form"  method="post" action="register.php">
          <h2 class="form_title title">Create Account</h2>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                 <label for="firstname">First Name</label>
                 <input type="text" class="form__input" name="firstname" id="firstname" value="">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                 <label for="lastname">Last Name</label>
                 <input type="text" class="form__input" name="lastname" id="lastname" value="">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                 <label for="email">Email address</label>
                 <input type="text" class="form__input" name="email" id="email" value="">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                 <label for="passwords">Passwords</label>
                 <input type="passwords" class="form__input" name="passwords" id="passwords" value="">
               </div>
             </div>
             <div class="col-12 col-sm-6">
               <div class="form-group">
                <label for="passwords_confirm">Confirm Passwords</label>
                <input type="passwords" class="form__input" name="passwords_confirm" id="passwords_confirm" value="">
              </div>
            </div>
            <?php if (isset($_REQUEST['error'])): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <br><h3><?php echo $_REQUEST['error']; ?></h3>
                </div>
              </div>
            <?php endif; ?>
            </div>
  
            <div class="row">
              <div class="col-12 col-sm-4">
                <button type="submit" name="btnRegister" class="form__button button submit">Register</button>
              </div>
            </div>
          </form>          
      </div>
      <div class="container b-container" id="b-container">
        <hr>
         <?php if (isset($_REQUEST['success'])): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_REQUEST['success']; ?>
          </div>
        <?php endif; ?>
        <form class="" method="post" action="auth.php">
        <h2 class="form_title title">Sign in to Website</h2>
          <div class="form-group">
           <label for="email">Email address</label>
           <input type="text" class="form__input" name="email" id="email" value="<?php //set_value('email') ?>">
          </div>
          <div class="form-group">
           <label for="passwords">Passwords</label>
           <input type="passwords" class="form__input" name="passwords" id="passwords" value="">
          </div>
           <?php if (isset($_REQUEST['error'])): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?php echo $_REQUEST['error']; ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
                <button type="submit" name="btnLogin" class="form__button button submit">Register</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a href="register.php">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">To keep connected with us please login with your personal info</p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello Friend !</h2>
          <p class="switch__description description">Enter your personal details and start journey with us</p>
          <button class="switch__button button switch-btn">SIGN UP</button>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
<!-- partial -->
  <script  src="assets/script.js"></script>

</body>
</html>
