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

	<title>Sponsors | Celesta 2k18</title>

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
	<header id="header" class="transparent-navbar spons_nav">
		<!-- container -->
		<div class="container">
			<center>
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.php">
						<img src="./images/logo_50*50.png" alt="logo" id="logo" class ="center">
						<img class="logo-img center" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img center" src="./img/logo-alt.png" alt="logo">
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
					<li><a href="index.php#gallery">Gallery</a></li>
					<li><a href="index.php#events">Events</a></li>
					<li><a href="ca/index.php">Campus Ambassador</a></li>
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

	<!-- Sponsors -->
	<div id="sponsors" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
		<center>
			<div class="row sponser_head">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Sponsors</span></h3>
				</div>
				<!-- /section title -->
				<h1>Coding Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Coding Ninjas</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/codingninjas.png" style = "width:300px" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>HackerEarth</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/hackerearth_new.png" style = "margin-top:40px;" alt="">
						</a>
					</div>
				</div>

				<h1>Health Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Ruban</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/ruban.png" alt="" class="center">
						</a>
					</div>
				</div>

				<h1>Stationary Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Classmate</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/classmate2.png" alt="" class="center">
						</a>
					</div>
				</div>

				<h1>Electronics Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Zebronics</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/zebronics.png" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Radio Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Radio Mirchi</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/radio2.jpg" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Food Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Jain Food Stall</p>
						<a href="#" class="sponsor">
							<img src="./imges/sponsor.png" alt="" class = "center">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Foodies</p>
						<a href="#" class="sponsor">
							<img src="./imges/sponsor.png" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Implementation Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Youth India Foundation</p>
						<a href="#" class="sponsor">
							<img class = "center" src="./images/sponsors/youthindiafoundation.jpeg" style="height:170px;width:170px" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Tech Prob Labz</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/techprolabz.jpeg" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Web and SMS Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>ASAP</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/asap.png" style = "height:100px; width:100px" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Workshop Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>What After College</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/whataftercollege.png" alt="" class = "center">
						</a>
					</div>
				</div>

				<!-- <h1>Merchandise Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Coding Ninjas</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsor.png" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>HackerEarth</p>
						<a href="#" class="sponsor">
							<img src="./imges/sponsor.png" alt="">
						</a>
					</div>
				</div> -->

				<h1>Blogger OutReach Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>BlogAdda</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/blogadda2.png" style = "height:100px;width : 250px" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Magazine Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>Scientific India Partner</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/scientificindia.png" style = "width:350px" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Online Media Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>FestPav</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/festpav.png" style = "margin-top:80px" alt="" class = "center">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>NTD India</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/ntdindia.jpg" style = "height:200px;margin-top:30px" alt="" class = "center">
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>The College Fever</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/thecollegefever.png" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Printing Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>IMAX Studios</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/imaxstudios.png" alt="" class = "center">
						</a>
					</div>
				</div>
				
				<h1>Gifting Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>The Souled Store</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/thesouledstore.png" style="height:200px;width:auto;" alt="" class = "center">
						</a>
					</div>
				</div>

				<h1>Online Learning Partner</h1>
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<p>LearnCodeOnline</p>
						<a href="#" class="sponsor">
							<img src="./images/sponsors/learncodeonline.png" style="height:150px;width:auto;" alt="" class = "center">
						</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</center>
	</div>
	<!-- /Sponsors -->

	<section class="upcoming-events-highlight " style="background-image:url(./imges/background02.jpg); bottom: 0;" data-stellar-background-ratio="0.5" >
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
	
	
	<!-- Contact -->
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contact</span> <span style="color: #dd0a37;">Info</span></h3>
				</div>
				<!-- /section title -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Contact -->

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
	<!-- Particle.js -->
	<script type='text/javascript' src='./js/jquery.particleground.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script>

	$(document).ready(function(){

		$('#home .section-bg #particles').particleground({
              dotColor: 'rgba(255,255,0,0.42)',
              lineColor: 'rgba(255,0,0,0.37)',
              density: 10000
              });
		$(".home-wrapper").css("top","27%");
	});

	$("#resend").on('click', function(){
		<?php
			if($set==1){
		?>
			$.post("//<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/resend",
            {
              id: <?php echo $id; ?>
            },
            function(data, status){
              console.log("Response");
              console.log("Data: " + data + "\nStatus: " + status);
              if(status=='success'){
                console.log(data);
                if(data["status"]=="200"){         
                	alert("Verification mail sent successfully!");  
                }else{
                  console.log("err");
                  alert("Verification mail failed!");  
              	} 
              }else{//$("#myloader").fadeOut();
                  alert("Verification mail failed!");
                  console.log("Failed "+data);

                }
            },"json");
		<?php }	?>
	})
	</script>
	<!-- /Particle.js -->
	<script src="assets/js/polyfills.js"></script>
	<!-- Loading -->
	<script src="assets/js/loading.js"></script>
	<script src="assets/js/index.js"></script>
	<!-- /Loading -->
</body>

</html>
