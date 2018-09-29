<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="./images/CLST_logo.ico">

	<title>Celesta 2k18</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/css/style_home.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/style_event.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/index.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/loading_content.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/loading.css" />	 -->
</head>
<body>
	<!-- Common template for all pages -->
	<!-- LOADING PART ================================================================================== -->
		<!-- <div class="loading-page">
  			<div class="counter1">
  				<h2 class="ml1" style="font-size: 1.5em; width: 500px; margin-left: -150px;">
  					<span class="text-wrapper">
    				<span class="line line1" style="top: -10px;"></span>
    				<span class="letters" id="first">CELESTA</span>
    				<h2 class="letters">REMASTERED</h2>
    				<span class="line line2"></span>
  					</span>
				</h2>
				<h3 style="color: red;">Loading</h3>
				<h1>0%</h1>
    			<hr/>
  			</div>		
    		<div class="loader-section section-left"></div>
    		<div class="loader-section section-right"></div>
		</div> -->
	<!-- LOADING PART END ============================================================================== -->

	<?php
		include "apiLe/dbConfig.php";
		$name = array();
		$id = "";
		$score = 0;
		$set = 0;
		$isca = 0;
		$error = "";
		// If the user is logged in -----------------------------------------------------------------
		if(isset($_SESSION['uid'])){
            $name = explode(" ",$_SESSION['name']);
            $id = $_SESSION['uid'];
            $set = 1;
            // Loged in -------------------
            // If the user is CA -----------------------------
            $sql = "SELECT * FROM users WHERE regID=". $id;
          		if($link =mysqli_connect($servername, $username, $password, $dbname)){
						$result = mysqli_query($link,$sql);
					if(!$result || mysqli_num_rows($result)<1){
						$error="Error fetching result.";
					}
					else{
						if($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
							if($row['isCA']==1 || $row['isCA']=='1'){
								$sql = "SELECT (SELECT count(*) FROM users P2 WHERE P2.caID = CA.regID AND P2.isCA=0)*20 + (SELECT COALESCE(SUM(score),0) AS score FROM cascore P3 WHERE P3.pID = CA.regID) + 20 AS Score FROM users CA WHERE CA.isCA<>0 AND CA.regID='". $id. "'";
								$result = mysqli_query($link,$sql);
								if(!$result || mysqli_num_rows($result)<1){
									$error="Error fetching result2.";
								}else{
									if($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
										$score = $row['Score'];
										$isca = 1;
										// The user is CA and $score is his points earned as CA -------------------------
									}
								}
							}
						}
            		//<a href=\"login.php?act=logout\" id=\"signup\">Logout</a>
        			}
        		}else{
        			$error.= "Error Connetiong to db";
       		 	}
       	}
       	// /The user is logged in -------------------------------

    ?>  
    <script type="text/javascript"> console.log("<?php echo $error; ?>");</script>
	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.php">
						<img src="./images/logo_50*50.png" alt="logo" id="logo">
						<img class="logo-img" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<?php if($set==1){ ?>
					<li id="show_mob" class="user_mob"><i class="fa fa-user"></i> <?php echo " Hi ". $name[0] ."!"; ?> <span class="fa fa-caret-right arrow_mob"></span></li>	
						<ul class="user_nav_mob">
							<?php if($isca==1){ ?>
							<a href="ca/index.php#leaderboard"><?php echo " Your CA score is ". $score ."."; ?></a>
							<?php } ?>
							<a data-toggle="modal" data-target="#speaker-modal-1">Events you registered</a>
							<a href="login.php?act=logout">Logout</a>
						</ul>
					<?php } ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php#about">About</a></li>
					<li><a href="index.php#schedule">Schedule</a></li>
					<li><a href="ca/index.php">Campus Ambassador</a></li>
					<li><a href="spons.php">Sponsors</a></li>
					<li><a href="#contact">Contact</a></li>
					<?php if($set==1){ ?>
					<li id="show_desk" class="user_desk"><a href="#" class="fa fa-user" style="size: 20em;"><span class="fa fa-caret-right arrow_desk" style="padding-left: 5px;"></span></a>
						<div class="user_nav_desk">
							<h3><?php echo " Hi ". $name[0] ."!"; ?></h3>
							<?php if($isca==1){ ?>
							<a href="">Your CA referal ID is <?php echo $id; ?></a>	
							<a href="ca/index.php#leaderboard"><?php echo " Your CA score is ". $score ."."; ?></a>
							<?php } ?>
							<a href="#" data-toggle="modal" data-target="#speaker-modal-1">Events you registered</a>
							<a href="login.php?act=logout">Logout</a>
						</div>
					</li>
					<?php }else{ ?>
					<li><a href="login.php">Login</a></li>
					<?php } ?>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- event modal -->
	<?php if($set==1){ ?>
	<div id="speaker-modal-1" class="speaker-modal modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-6">
								<h2 class="speaker-name"> <?php echo $_SESSION['name']; ?> </h2>
							</div>
							<div class="col-sm-6">
								<h2>Celesta ID : CLST<?php echo $id; ?></h2>
							</div>
						</div>
						<div class="row events_content">
						<div class="col-sm-4">
							<h3>Events</h3>
							<h4>Not registered in any.</h4>
						</div>
						<div class="col-sm-4">
							<h3>Worshop</h3>
							<h4>Not registered in any.</h4>
						</div>
						<div class="col-sm-4">
							<h3>Exhibition</h3>
							<h4>Not registered in any.</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- /event modal -->

	<!-- /Common template for all pages -->

	<!-- testimonials -->
	<div class="testimonials services jarallax">
			<div class="container">
				<div class="cn-overlay_events"></div>
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="section-title" style="margin-bottom: -50px;">
						<h3 class="title"><span style="color: #dd0a37; padding-top: 50px;">Events</span></h3>
					</div>
					<!-- /section title -->
					<div class="gallery_gds agileits-w3layouts">
						<ul class="simplefilter">
							<li class="active" data-filter="all">All</li>
							<li data-filter="1">Category 1</li>
							<li data-filter="2">Category 2</li>
							<li data-filter="3">Category 3</li>
							<li data-filter="4">Category 4</li>
						</ul>
						<div class="filtr-container">
							<?php
								 
								$event_id = ["10301","10401","10101","10201","10201","10301","10401","10401","10101","10201","10201","10301","10401"];
								$iterator = 0;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Busy streets">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							<?php 
								$iterator++;
								$Category = substr($event_id[$iterator],1,2);
								if($Category[0]=='0'){
									$Category = substr($Category, 1);
								}
							?>
							<div class="col-sm-4 col-xs-6 filtr-item" data-category="<?php echo $Category; ?>" data-sort="Luminous night">
								<div class="hover ehover14">
									<a href="images/horiz.jpg" class="swipebox" title="Coming Soon">
										<img src="images/horiz.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Coming Soon</h4>
											<a id="<?php echo $event_id[$iterator]; ?>"><div class="info nullbutton button">Show More</div></a>
										</div>
									</a>	
								</div>
							</div>
							
						   <div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
	<!-- <div id="portfolio" class="portfolio jarallax">
				<div class="container">  
					<div class="title">
						<h3>Event Schedule</h3>
						<p> The event Schedule is yet to be released. Stay tuned for further updates!</p>
					</div>
					<div class="testi-agileinfo services-row"> 
						<div class="col-sm-1 about-grids about-grids2">
						</div>
						<div class="col-sm-10 about-text w3-agileits gallery_gds">
							<a href="images/horiz.jpg" class="swipebox">
								<img src="images/horiz.jpg" class="img-responsive" width="100%" height="100%" />
							</a>
						</div>
						<div class="col-sm-1 about-grids about-grids2">	
						</div>
						<div class="clearfix"> </div>
					</div>  
				</div>
			</div>
	 -->
	</div>
	<!-- //testimonials -->

		<!-- Footer -->
		<footer id="footer" style="background: rgba(255,0,0,0.1);">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Reach To Us At</h3>
						<p>
						Indian Institute of Technology Patna
						<p>Bihta</p>
						<span>Patna-801106 (Bihar)</span>
						</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Ring Us At</h3>
						<p>+91 9955532583</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Mail Us At</h3>
						<a href="#">mpr@celesta.org.in</a>
					</div>
				</div>
				<!-- /contact -->
				
			<div class="row">
				<!-- footer logo -->
				<!-- <div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.html">
							<img class="logo-img" src="./imges/logo.png" alt="logo">
						</a>
					</div>
				</div> -->
				<!-- /footer logo -->

				<!-- contact social -->
				<div class="col-md-3 col-md-push-0">
					<br><br>
					<div class="contact-social">
						<a href="https://www.facebook.com/CelestaIITP/"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/celesta_iitp"><i class="fa fa-twitter"></i></a>
						<!-- <a href="#"><i class="fa fa-google-plus"></i></a>
						 --><a href="https://www.instagram.com/celestaiitp_official/"><i class="fa fa-instagram"></i></a>
						<!-- <a href="#"><i class="fa fa-pinterest"></i></a>
						 --><!-- <a href="#"><i class="fa fa fa-linkedin"></i></a> -->
					</div>
				</div>
				<!-- /contact social -->

				<!-- copyright -->
				<!-- <div class="col-md-4 col-md-pull-8">
					<span class="copyright"> --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><!-- </span>
				</div> -->
				<!-- /copyright -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/jquery.countTo.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<script src="assets/js/polyfills.js"></script>

	<script src="assets/js/jquery.filterizr.js"></script>
    <script src="assets/js/controls.js"></script>
    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
	<!--//gallery-->
	<!-- swipe box js -->
	<script src="assets/js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->

	<!-- banner Slider starts Here -->
	<script src="assets/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:false,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
	<!-- //End-slider-script -->
	<!-- jarallax -->  
	<script src="assets/js/SmoothScroll.min.js"></script> 
	<script src="assets/js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->    
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	<!-- <script src="assets/js/bootstrap.js"></script> -->
</body>

</html>

