<?PHP
	include_once "../controller/evenementC.php";
	

	$evenementC=new evenementC();
	$listeUsers=$evenementC->afficherevenement1();
	$liste=$evenementC->afficherevenement2();
    $listeee=$evenementC->afficherevenement3();
    $lister=$evenementC->afficherevenement4();
    $listerr=$evenementC->afficherevenement5();
    $listerrr=$evenementC->afficherevenement6();

	

	
	


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Tmakhmikha</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--> 
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="lzRpfdmx"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/home/4.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="style.css">
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="VumE1b3Q"></script>

</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> tmakhmikha@esprit.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								
								
								
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
						
						</div>
				
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
				
					
		<!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                                    
									
								<li><a href="evenement.php">Evenement</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>TMAKH</span>MIKHA</h1>
									
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/4.jpg"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>TMAKH</span>MIKHA</h1>
	
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/an5.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/an7.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Evenement</h2>
                <hr class="star-primary">
            </div>
        </div>
        <?PHP
				foreach($listeUsers as $user){
					
			?>
        <div class="row">
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $user['image'] ?>" class="img-responsive" alt="">
                </a>
            </div>
            <?php 
                }
            ?>
             <?PHP
				foreach($liste as $userr){
					
			?>
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $userr['image'] ?>" class="img-responsive" alt="">
                </a>
                <?php 
                }
            ?>
            </div>
            <?PHP
				foreach($listeee as $userrr){
					
			?>
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $userrr['image'] ?>" class="img-responsive" alt="">
                </a>
                <?php 
                }
            ?>
            </div>
           
        </div>
    </div>
</section> 

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($lister as $us){
					
			?>
                    
                        <h2>Evenement <td><?PHP echo $us['categorie']; ?></td></h2>
                        
                        <hr class="star-primary">
                        <img src="images/<?= $us['image'] ?>" class="img-responsive img-centered" alt="">

                        <p><?PHP echo $us['description']; ?>
                        <br> <p>Type de l'evenement : <?PHP echo $us['type']; ?> </p>
                        
                        </p>
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $us['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $us['datef']; ?>
                                </strong>
                            </li>
                            <li>lieu:
                                <strong><?PHP echo $us['lieu']; ?>
                                </strong>
                            </li>
                        </ul>
                        
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
						
					</td>
							
                        </button>
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($listerr as $uss){
					
			?>
                    
                        <h2>Evenement <td><?PHP echo $uss['categorie']; ?></td></h2>
                        
                        <hr class="star-primary">
                        <img src="images/<?= $uss['image'] ?>" class="img-responsive img-centered" alt="">

                        <p><?PHP echo $uss['description']; ?>
                        <br> <p>Type de l'evenement : <?PHP echo $uss['type']; ?> </p>
                        
                        </p>
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $uss['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $uss['datef']; ?>
                                </strong>
                            </li>
                            <li>lieu:
                                <strong><?PHP echo $uss['lieu']; ?>
                                </strong>
                            </li>
                        </ul>
                       
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
						
							
					</td>
							
                        </button>
						
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div><img src="images/<?= $u['image'] ?>" class="img-responsive img-centered" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($listerrr as $u){
					
			?>
                    
                        <h2>Evenement <td><?PHP echo $u['categorie']; ?></td></h2>
                        
                        <hr class="star-primary">
                        

                        <p><?PHP echo $u['description']; ?>
                        <br> <p>Type de l'evenement : <?PHP echo $u['type']; ?> </p>
                        
                        </p>
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $u['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $u['datef']; ?>
                                </strong>
                            </li>
                            <li>lieu:
                                <strong><?PHP echo $u['lieu']; ?>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
						
					
					</td>
							
                        </button>
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

			
			<div class="col">
				
				
				 
				<style>
			     .contenir {
				    text-align: center;
                    margin-top: 100px;
			                }
		        </style>
				<div class="contenir">
				<div class="fb-share-button" data-href="http://Tmakhmikha.tn" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2FlisteP.php%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
				</div>
				
			</div>
			
			
	


<div>
<br>
<br>
<br>
<br>
</div>


       
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>TMAKH</span>MIKHA</h2>
							
						</div>
					</div>
					
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Animaux</a></li>
								<li><a href="#">Nourriture</a></li>
								<li><a href="#">Plantes</a></li>
								<li><a href="#">Accesoires</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Tmakhmikha </h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Tmakhmikha</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	

	


  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>