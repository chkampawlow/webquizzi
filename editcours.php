<?php
include_once 'model/cours.php';
include_once 'controller/ajoutercours.php';

$error = "";

// create cours
$cours = null;
$courC = null;
// create an instance of the controller
$courC = new courC();
if (
    isset($_POST["nomcours"]) &&
    isset($_POST["typecours"]) &&
    isset($_POST["cours"]) 
) {
    if (
        !empty($_POST["nomcours"]) &&
        !empty($_POST["typecours"]) &&
        !empty($_POST["cours"]) 
    ) {
        $cours = new cours(
            $_POST['nomcours'],
            $_POST['typecours'],
            $_POST['cours']

        );
        var_dump($_GET['idcours']);
        $courC ->modifiercours($cours, $_GET['idcours']);
        //header('Location:../front/blogs.php');
    } else
        echo "Missing information";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Reveal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.8.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:karim-checambou123@gmail.com">karim-checambou123.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>51170669</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">qui<span>zzi</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>quizz</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            
            <li>add quizz</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
    <center>  
    <div class="container">

        

          <div class="col-lg-4">
            <div class="portfolio-info">
            <h3>cours</h3>
              <ul>
              <form method="post" action="">
                            <div class="form-group">
                                <label for="nomcours">Taper le Nom Du Cours</label>
                                <input type="text" class="form-control" name="nomcours" id="nomcours" placeholder="Entrer le nomcours">
                            </div>

                      



                            <div class="form-group">
                                <label for="typecours">Taper le Type de Cours</label>
                                <input type="text" class="form-control" name="typecours">
                            </div>
                      
                            <div class="form-group">
                                <label for="cours"> Description </label>
                                <textarea class="form-control" rows="3" name="cours"></textarea>
                            </div>
                           <!-- <script>
                            CKEDITOR.replace('cours');
                        </script>-->

                            <button type="submit" value="Envoyer" class="btn btn-primary">Submit</button>

                        </form>
            
              </ul>
            </div>
            
          



                        </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
                        </center>  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>