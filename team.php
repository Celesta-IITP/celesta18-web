
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

	<title>Team | Celesta 2k18</title>
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
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/team.css" />
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/loading_content.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/loading.css" />	 -->
</head>
<body style="overflow-x: hidden;">
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
	<header id="header" class="transparent-navbar spons_nav">
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
					<li><a href="index.php#gallery">Gallery</a></li>
					<li><a href="index.php#events">Events</a></li>
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
	<?php } ?>
	<!-- /event modal -->

	<!-- /Common template for all pages -->
<!-- background image -->
<div class="section-bg" style="background-image:url(./img/background01.jpg); position: fixed; background-repeat: repeat-y;" data-stellar-background-ratio="0.5">
			<div id="particles" style="position: absolute; width: 100%; height: 100%; z-index: 3;"></div>
			<div class="cn-overlay"></div>	
		</div>
		<!-- /background image -->
	

	<!-- Sponsors -->
	<div class="section">

	</div>
	<!-- /Sponsors -->

	<div class="container">
		<div class="section-title">
			<h3 class="title"><span style = "color:white">Core &nbsp;</span> <span style="color: #dd0a37;">Committee</span></h3>
		</div>
	</div>

		<div class = "row" style = "padding:2em">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class = "col-sm-4" >
				</div>
				<div class = "col-sm-4 member">
					<center><h2 style="color: red;">Fest Coordinator</h2>
					<img src = "img/avatar.png" style = "border-radius:50%;width:7em;height:7em">
					<h2 style = "text-decoration:none">Parth Kulkarni</h2>
					<h4 style="color: red;">Contact: <span style="color: black; padding-left: 5px;">+91 9876543210</span></h4>
					<h4 style="color: red;">Email: <span style="color: black; padding-left: 5px;">abc@xyz.com</span></h4>
				</center>
				</div>
				<div class = "col-sm-4">
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>

		<div class = "row" style = " padding:2em">
			<div class = "col-sm-6" style="margin-bottom: 15px;">
				<div class = "col-sm-5">
				</div>
				<div class = "col-sm-7 member" >
					<center><h2 style="color: red;">Stand-in Fest Coordinator</h2><img src = "img/avatar.png" style = "border-radius:50%;width:7em;height:7em">
					<h2 style = "text-decoration:none">abcd</h2>
					<h4  style="color: red;">Contact: <span style="color: black; padding-left: 5px;">+91 9876543210</span></h4>
					<h4 style="color: red;">Email: <span style="color: black; padding-left: 5px;">abc@xyz.com</span></h4></center>
				</div>
				<div class = "col-sm-1">
				</div>
			</div>
			<div class = "col-sm-6" style="margin-bottom: 15px;">
				
				<div class = "col-sm-7 member">
					<center><h2 style="color: red;">Fest Convener</h2><img src = "img/avatar.png" style = "border-radius:50%;width:7em;height:7em">
					<h2 style = "text-decoration:none">djdsjdj</h2>
					<h4  style="color: red;">Contact: <span style="color: black; padding-left: 5px;">+91 9876543210</span></h4>
					<h4 style="color: red;">Email: <span style="color: black; padding-left: 5px;">abc@xyz.com</span></h4>
				</center>
				</div>
				<div class = "col-sm-6">
				</div>
			</div>
		</div>
		
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("data da");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>
		<div class = "row" style = "padding:1em">
			<div class = "col-sm-1">
			</div>
			<div class = "col-sm-10 links">
				<?php 
					$param = urlencode("");
				?>
				<center><h1><a href="team_.php?<?php echo $param; ?>" style="text-decoration: none; color: red;"> Team</h1></center>
			</div>
			<div class = "col-sm-1">
			</div>
		</div>

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
	</script>
	<script src="assets/js/polyfills.js"></script>
	<!-- Loading -->
	<script src="assets/js/loading.js"></script>
	<script src="assets/js/index.js"></script>
	<!-- /Loading -->
	<script src="assets/js/jquery.csv.js"></script>
	
</body>

</html>

