<?php

include '../controller/offresC.php';

$error = "";

// create client
$offres = null;

// create an instance of the controller
$offresC = new offresC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["code_promo"]) &&
    isset($_POST["plats"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["remise"]) 
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["code_promo"]) &&
        !empty($_POST["plats"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["remise"])
    ) {
        $offres = new offres(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['code_promo'],
            $_POST['plats'],
            $_POST['prix'],
            $_POST['remise']
        );
        $offresC->updateoffres($offres, $_POST["id_offres"]);
        header('Location:Listoffres.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tmakhmikha </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> 7/7: 07:00 - 00:00</span></i>
      </div>

    </div>
  </div>


    

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_offres'])) {
        $offres = $offresC->showoffres($_POST['id_offres']);
    }
    ?>
 <div class="full graph_head">
        <form action="" method="POST">
            <table class="table table-dark table-striped">
                
            <tr>
                    <td>
                        <label for="id_offres">id_offres:
                        </label>
                    </td>
                    <td><input  name="id_offres" id="id_offres" value="<?php echo $offres['id_offres']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $offres['nom']; ?>" maxlength="20"></td>
                </tr>
            
                <tr>
                    <td>
                        <label for="prenom">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $offres['prenom']; ?>" maxlength="20"></td>
                </tr>


                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $offres['email']; ?>" id="email">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="code_promo">code_promo:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="code_promo" value="<?php echo $offres['code_promo']; ?>" id="code_promo">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="plats">plats:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="plats" id="plats" value="<?php echo $offres['plats']; ?>">
                    </td>
                </tr>



                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix" id="prix" value="<?php echo $offres['prix']; ?>">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="remise">remise:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="remise" id="remise" value="<?php echo $offres['remise']; ?>">
                    </td>
                </tr>
                <tr>
            
                    <td>
                    <div class="button_block"><button type="submit" class="btn cur-p btn-outline-warning" >update</button></div>
                        
                    </td>
                    
                </tr>
            </table>
        </form>
        <center>
          <button>
            <form method="POST" action="Listoffres.php">
                    <div class="button_block"><button type="submit" class="btn cur-p btn-outline-dark" >back to list</button></div>
                        
                    </form></center>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Tmakhmikha</h3>
              <p>
                A108 tunis Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +216 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>vous trouvez que les plats délicieux!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'inscrire">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tmakhmikha</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">ELITE groupe</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/offres.js"></script>
</body>

</html>