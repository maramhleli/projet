<?php
include '../controller/offresC.php';
$offresC = new offresC();
$list = $offresC->listoffres();
?>
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
   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> 7/7: 07:00 - 00:00</span></i>
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    
      <h1 class="logo me-auto me-lg-2"><fon face ="2660.ttf"></fon><a href="index.html">Tmakhmikha</a></h1>
    
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#A propos">A propos</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#offres">offres</a></li>
          <li><a class="nav-link scrollto" href="#reclamation">reclamation</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#passer commande" class="book-a-table-btn scrollto d-none d-lg-flex">passer commande</a>

    </div>
  </header><!-- End Header -->

  
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

  
  <div class="full graph_head">
    
       <center> <h1>gestion des offres </h1></center>
   <center> <table border=3 class="table table-dark table-striped"></center>
        <tr>
           
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>code_promo</th>
            <th>plats</th>
            <th>prix</th>
            <th>remise</th>
            <th>update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $offres) {
        ?>
            <tr>
                <td><?= $offres['nom']; ?></td>
                <td><?= $offres['prenom']; ?></td>
                <td><?= $offres['email']; ?></td>
                <td><?= $offres['code_promo']; ?></td>
                <td><?= $offres['plats']; ?></td>
                <td><?= $offres['prix']; ?></td>
                <td><?= $offres['remise']; ?></td>
                <td>
                    <form method="POST" action="updateoffres.php">
                    <div class="button_block"><button type="submit" class="btn cur-p btn-outline-warning" >update</button></div>
                        
                        <input type="hidden" value=<?PHP echo $offres['id_offres']; ?> name="id_offres">
                    </form>
                </td>
                <td>
                    <a href="deleteoffres.php?id_offres=<?php echo $offres['id_offres']; ?>"class="btn cur-p btn-outline-warning">delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <center>
    <form method="POST" action="addoffres.php">
                    <div class="button_block"><button type="submit" class="btn cur-p btn-outline-warning" >ajouter un avis</button></div>
                        
                    </form>
  <center>
</body>
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