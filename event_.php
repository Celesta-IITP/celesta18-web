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
	  <?php
		function clean($string) {
		   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

		   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
		}
	      /*$url = $_SERVER['REQUEST_URI'];
	      $param = explode("?",$url);*/
	      $event_id = $_GET['eveID'];
	      $event_data = array();
	      $ok = 0;
			if($str = file_get_contents("eventdata/". $event_id . ".json")){
				$event_data = json_decode($str, true);
				$ok = 1;
			}
		
	  ?>
	<title><?php if ($ok && $event_data["name"]) echo clean($event_data["name"])." | "; ?>Events | Celesta 2k18</title>

	<!-- Search Engine -->
	<?php if ($ok && $event_data["about"]){ $cAbout = clean($event_data["about"]) ?>
		<meta name="description" content="<?php echo $cAbout; ?>">
		<meta itemprop="description" content="<?php echo $cAbout; ?>">
		<meta name="twitter:description" content="<?php echo $cAbout; ?>">
		<meta name="og:description" content="<?php echo $cAbout; ?>">
	<?php }else{ ?>
		<meta name="description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
		<meta itemprop="description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
		<meta name="twitter:description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
			<meta name="og:description" content="Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.">
	<?php } ?>
	<meta name="image" content="https://celesta.org.in/img/background01.jpg">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="<?php if ($ok && $event_data["name"]) echo clean($event_data["name"])." | "; ?>Celesta '18, IIT Patna">

	<meta itemprop="image" content="https://celesta.org.in/img/background01.jpg">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php if ($ok && $event_data["name"]) echo clean($event_data["name"])." | "; ?>Celesta '18, IIT Patna">
	<meta name="twitter:site" content="@celesta_iitp">
	<meta name="twitter:creator" content="@celesta_iitp">
	<meta name="twitter:image:src" content="https://celesta.org.in/img/background01.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="<?php if ($ok && $event_data["name"]) echo clean($event_data["name"])." | "; ?>Celesta '18, IIT Patna">

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
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/loading_content.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/loading.css" />	 -->
	<style>
		h4 > span, h3 > span {
			color: #dd0a37;
		}
		.button1{
   			display:inline-block;
   			padding:0.35em 1.2em;
   			border:0.1em solid black;
   			margin:0 0.3em 0.3em 0;
   			border-radius:0.12em;
   			box-sizing: border-box;
   			text-decoration:none;
   			font-family:'Roboto',sans-serif;
   			font-weight:300;
   			color:#FFFFFF;
   			text-align:center;
   			transition: all 0.2s;
  		}
  		.button1:hover{
  		 	color:#000000;
   			background-color:#f4d03e;
  		}
  		@media all and (max-width:30em){
  	  		.button1{
    			display:block;
    			margin:0.4em auto;
   			}
		}
	</style>

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
		$unsub = 0;
		$show = "Register";
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
						if((string)$event_id == (string)$eveID){
							$unsub = 1;
							$show = "Cancel Registration";
						}
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
<div class="section-bg" style="background-image:url(./img/background01.jpg);" data-stellar-background-ratio="0.5">
			<div id="particles" style="position: absolute; width: 100%; height: 100%; z-index: 3;"></div>
			<div class="cn-overlay"></div>	
		</div>
		<!-- /background image -->
	

	<!-- Event -->
	<div id="event" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
				<?php if($ok==0){ ?>
					<div class="section-title">
						<h3 class="title"><span style = "color:white">Sorry. &nbsp;</span><span>Data not available</span></h3>
					</div>
				<?php }else{ 
					foreach ($event_data as &$value) {
						if($value==""){
							$value = "(To be updated)";
						}
					}
					?>	
					<!-- section title -->
					<div class="section-title">
						<h3 class="title"><span style = "color:white">Event: &nbsp;</span><span><?php echo $event_data['name']; ?></span></h3>
					</div>
					<!-- /section title -->
					<div style="background-color:white;padding:1em;border-radius:5px;">
						<!-- <img id="poster" src="" alt="#"> -->
						<h3 id="date">Date: &nbsp;<span><?php echo $event_data['date']; ?></span></h3>
						<h3 id="time">Time: &nbsp;<span><?php echo $event_data['time']; ?></span></h3>
						<h3 id="venue">Venue: &nbsp;<span><?php echo $event_data['venue']; ?></span></h3>
						<br>
						<p id="desc">
							<?php echo $event_data['about']; ?><br><b>For more details see rules below</b>
						</p>
						<br>
						<h4>Organized by: &nbsp;<span id="orgClub"><?php echo $event_data['organised']; ?></span></h4>
						<h4>For Queries Contact: &nbsp;<span class="orgContact"><?php echo $event_data['contact']; ?></span></h4><br>
						<h4>
						<?php if($event_data['rules']=="(To be updated)"){ ?>
							<a id="rules_button" class="button1" style = "margin-left : 1em;border:3px solid black; padding:0.4em;">Rules</a>
						<?php }else{ ?>
							<a href="<?php echo $event_data['rules']; ?>" class="button1" style = "margin-left : 1em;border:3px solid black; padding:0.4em;">Rules</a>
						<?php } ?>
							<a class="button1" id="register" style = "margin-left : 2em;border:3px solid black; padding:0.4em; "><?php echo $show ?></a>
						</h4><br>
					</div>
				<?php } ?>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Event -->

	<section class="upcoming-events-highlight " style="background-image:url(./img/background02.jpg); bottom: 0;" data-stellar-background-ratio="0.5" >
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
	
	
	

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
							<img class="logo-img" src="./img/logo.png" alt="logo">
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

	</script>
	<!-- /Particle.js -->
	<script src="assets/js/polyfills.js"></script>
	<!-- Loading -->
	<script src="assets/js/loading.js"></script>
	<script src="assets/js/index.js"></script>
	<!-- /Loading -->
	<script>
  $(document).ready(function() {

  var parameters = location.search.substring(1).split("=");
  var event_id = parameters[0];
  
  function clicked(act){

  	<?php if($set==1){ ?>
        $.post("//<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/event_reg",
            {
                id : "<?php echo $id; ?>",
                event_id: event_id,
                event_name : "<?php echo $event_data['name']; ?>",
                unsub : act
            },
            function(data, status){
              	console.log("Response");
              	console.log("Data: " + data + "\nStatus: " + status);
              	if(status=='success'){
              	  	if(data["status"]==200){
                		alert(data['message']);
                		console.log("success");
                		window.location = "event_.php?"+event_id;
              		}else if(data['status']==409){
              			alert(data['message']);
              		}else{
              			if(act==1){
              				alert("Could not unregister.\nSorry for the inconvenience.");
              			}else{
                		alert("Could not register.\nSorry for the inconvenience.");
                	  	}
                	  	console.log("err");
                	  	console.log(data);
              		}
              	}else{
                  	console.log("Failed "+data);
              	}
            },"json");
    <?php }else{ ?>
      	window.location="http://celesta.org.in/login.php";
    <?php } ?>
  }

  $("#register").click(function(e) {
      clicked(<?php echo $unsub; ?>);
      console.log("clicked");
      e.preventDefault();
  });

  $("#rules_button").click(function(e) {
      show_alert();
      console.log("clicked");
      e.preventDefault();
  });

  function show_alert(){
  		alert("To be uploaded soon.");
  }
});
   
</script>

</body>

</html>
