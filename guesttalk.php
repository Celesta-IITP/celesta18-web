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
	
	<!-- Search Engine -->
	<meta name="description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
	<meta name="image" content="https://celesta.org.in/img/background01.jpg">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="Celesta '18, IIT Patna">
	<meta itemprop="description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
	<meta itemprop="image" content="https://celesta.org.in/img/background01.jpg">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Celesta '18, IIT Patna">
	<meta name="twitter:description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
	<meta name="twitter:site" content="@celesta_iitp">
	<meta name="twitter:creator" content="@celesta_iitp">
	<meta name="twitter:image:src" content="https://celesta.org.in/img/background01.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="Celesta '18, IIT Patna">
	<meta name="og:description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
	<meta name="og:image" content="https://celesta.org.in/img/background01.jpg">
	<meta name="og:url" content="https://celesta.org.in">
	<meta name="og:site_name" content="Celesta '18, IIT Patna">
	<meta name="fb:admins" content="549099751772038">
	<meta name="og:type" content="website">
	<!-- /Open-Graph and Twitter Meta tags for SEO and Social Media -->

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
	<link rel="stylesheet" type="text/css" href="assets/css/snackbar.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/pronight.css" />
	<script src="assets/js/jquery.min.js"></script>
	
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/loading_content.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/loading.css" />	 -->
</head>
<body style="background-image:url(./img/background01.jpg); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; overflow-x: hidden; ">
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
		$events_registered = array();
		$events_registered['events'] = array();
		$events_registered['workshop'] = array();
		$events_registered['exhibition'] = array();
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
       		// Events registered in by the user since he is logged in
       		$error = "";
			$sql = "SELECT * FROM eventreg WHERE uID='". $id ."'";
        	if($link =mysqli_connect($servername, $username, $password, $dbname)){
				$result = mysqli_query($link,$sql);
				if(!$result || mysqli_num_rows($result)<1){
					array_push($events_registered['events'], "Not registered in any.");
					array_push($events_registered['workshop'], "Not registered in any.");
					array_push($events_registered['exhibition'], "Not registered in any.");			
				}else{
					while($row = mysqli_fetch_assoc($result)){
						$catag = "";
						$eveID = (string)$row['eveID'];
						if($eveID[0]=="1") $catag = 'events';
						else if($eveID[0]=="2") $catag = 'workshop';
						else $catag = 'exhibition';
						array_push($events_registered[$catag], $row['eveName']);
					}
					if(empty($events_registered['events'])){
						array_push($events_registered['events'], "Not registered in any.");
					}
					if(empty($events_registered['workshop'])){
						array_push($events_registered['workshop'], "Not registered in any.");
					}
					if(empty($events_registered['exhibition'])){
						array_push($events_registered['exhibition'], "Not registered in any.");
					}
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
		<div class="container" id="navigation">
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
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="index.php#schedule">Schedule</a></li>
					<li><a href="ca/index.php">Campus Ambassador</a></li>
					<li><a href="spons.php">Sponsors</a></li>
					<li><a href="team.php">Team</a></li>
					<li><a href="index.php#contact">Contact</a></li>
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
						<div class="row events_content" id="reenter">
						<div class="col-sm-4">
							<h3>Events</h3>
							<?php foreach ($events_registered['events'] as $value)
							 { echo "<h4>". $value ."</h4>"; } ?>
						</div>
						<div class="col-sm-4">
							<h3>Workshop</h3>
							<?php foreach ($events_registered['workshop'] as $value)
							 { echo "<h4>". $value ."</h4>"; } ?>
						</div>
						<div class="col-sm-4">
							<h3>Exhibition</h3>	
							<?php foreach ($events_registered['exhibition'] as $value)
							 { echo "<h4>". $value ."</h4>"; } ?>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- /event modal -->

	<!-- /Common template for all pages -->

	<div id="snackbar" class="hide"><div id="close_snackbar">x</div> More coming soon...<br> Stay tuned :)</div>

	<div  class="section-bg" data-stellar-background-ratio="0.5">
		<div class="cn-overlay" style="position: fixed !important;"></div>
	</div>
	
	<!-- testimonials -->
	<div class="testimonials services jarallax" style="min-height: 100vh;">
		<div class="section-title" style="margin-bottom: -60px;">
			<h3 class="title"><span style="color: white; padding-top: 50px; font-size: 1.5em;">Guest</span><span style="color: #dd0a37;  padding-top: 50px; font-size: 1.5em;">Talks</span></h3>
		</div>
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="event/Guest Talks/rahul.jpeg"  alt="">
						</div>
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>Celesta 2k18 is glad to have</h6>
							<h1>Rahul Singh</h1>
							<p>
								 IAS officer, Secretary cum Appellate Authority (Information Technology), Finance and IT Dept., Government of Bihar.

							</p>
							<a href="https://www.linkedin.com/in/rahul-singh-688b7a3?originalSubdomain=in" target="_blank" class="primary-btn text-uppercase">more</a>
						</div>
					</div>
				</div>					
			</section>
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-5 col-md-5 banner-right d-flex align-self-end">
							<img class="img-fluid" src="event/Guest Talks/AshishJain.jpeg"  alt="">
						</div>
						<div class="col-lg-7 col-md-7 banner-left">
							<h6>Celesta 2k18 is glad to have</h6>
							<h1>Ashish Jain</h1>
							<p>
								Ashish, an Industrial Designer, studied at MIT Institute of Design is
currently working at LVPEI Center for Innovation, L V Prasad Eye Institute
Hyderabad. As much as he loves to create experience focused product
solutions, his primary interest lies in designing processes to develop,
problem specific and user centric solutions.<br>Ashish and the LVPEI innovation team is currently involved in creating
disruptive solutions in the domain of eye care focusing at scalable,
accessible and equitable solutions.
							</p>
							<a href="https://www.linkedin.com/in/ashish-jain-42a93646/" target="_blank" class="primary-btn text-uppercase">more</a>
						</div>
					</div>
				</div>					
			</section>
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-5 col-md-5 banner-right d-flex align-self-end">
							<img class="img-fluid" src="event/Guest Talks/hitesh.jpeg"  alt="">
						</div>
						<div class="col-lg-7 col-md-7 banner-left">
							<h6>Celesta 2k18 is glad to have</h6>
							<h1>Hitesh Choudhary</h1>
							<p>
								Founder and CEO of LearnCodeOnline. Renowned expert in Cybersecurity, popular YouTuber with 250K+ subscribers.
							</p>
							<a href="https://www.hiteshchoudhary.com" target="_blank" class="primary-btn text-uppercase">more</a>
						</div>
					</div>
				</div>					
			</section><br>
			
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

	

	<!-- jQuery Plugins -->
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
            $.when($('.filtr-container').filterizr()).done(function(){
       			$.when(RESET_BOXES1()).done(function(){
       			RESET_BOXES2() })
   			});
            					
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
   	<script type="text/javascript">   		
		$("#close_snackbar").click(function(){
			var x = document.getElementById("snackbar");
    		x.className = x.className.replace("show", "hide");
		});
	</script>
</body>

</html>

