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

	<title>Alumni Invite | Celesta 2k18</title>

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
	<link type="text/css" rel="stylesheet" href="/css/team.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/team.css" />
	<link rel="stylesheet" type="text/css" href="touse.css" />
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/loading_content.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/loading.css" />	 -->
</head>

<body style="background-image:url(./img/background01.jpg); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; overflow-x: hidden;">
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
	<script type="text/javascript">
		console.log("<?php echo $error; ?>");
	</script>
	<!-- Header -->
	<header id="header" class="transparent-navbar spons_nav">
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
					<li id="show_mob" class="user_mob"><i class="fa fa-user"></i>
						<?php echo " Hi ". $name[0] ."!"; ?> <span class="fa fa-caret-right arrow_mob"></span></li>
					<ul class="user_nav_mob">
						<?php if($isca==1){ ?>
						<a href="ca/index.php#leaderboard">
							<?php echo " Your CA score is ". $score ."."; ?></a>
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
					<li id="show_desk" class="user_desk"><a href="#" class="fa fa-user" style="size: 20em;"><span class="fa fa-caret-right arrow_desk"
							 style="padding-left: 5px;"></span></a>
						<div class="user_nav_desk">
							<h3>
								<?php echo " Hi ". $name[0] ."!"; ?>
							</h3>
							<?php if($isca==1){ ?>
							<a href="">Your CA referal ID is
								<?php echo $id; ?></a>
							<a href="ca/index.php#leaderboard">
								<?php echo " Your CA score is ". $score ."."; ?></a>
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
							<h2 class="speaker-name">
								<?php echo $_SESSION['name']; ?>
							</h2>
						</div>
						<div class="col-sm-6">
							<h2>Celesta ID : CLST
								<?php echo $id; ?>
							</h2>
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
	<div  class="section-bg" data-stellar-background-ratio="0.5">
		<div class="cn-overlay" style="position: fixed !important;"></div>
	</div>
	<!-- /background image -->


	<!-- Sponsors -->
	<div class="section">

	</div>
	<!-- /Sponsors -->

	<div class="container">
		<div class="section-title">
			<h3 class="title"><span style="color:white">Crowdfunding</span></h3>
		</div>
	</div>
	<br>
	<div class="container">
    <div class="row row-centered">
        <div class="col-md-6 col-centered" style="color:#fff">
        <h3 style="color:#fff">There's a lot you can do to support our ever-growing technical fest.</h3><br>
		</div>
	</div>
    <div class="row row-centered" style="margin-top:60px">
        <div class="col-md-3 col-centered">
			<div class="box-wrapper">
				<div class="box">
					<div class="box-inner">
						<div class="avatar">
                            <img src="./images/gpay.jpg" alt="">
                        </div>
						<h3 class="name">Google Pay</h3>
						<h4 class="dept">9955541574</h4>

					</div>
					<!-- <ul class="social-list">
						<li><a href="#" class="fa fa-globe" target="_blank"></a></li>
						<li><a href="https://www.facebook.com/mayank.tripathi.507" class="fa fa-facebook" target="_blank"></a></li>
						<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
						<li><a href="mailto:mayank.me16@gmail.com" class="fa fa-envelope"></a></li>
						<li><a href="tel:+917977884481" class="fa fa-mobile"></a></li>
						<li><a href="https://www.linkedin.com/in/mayank-tripathi-84b08b15a/" class="fa fa-linkedin" target="_blank"></a></li>
					</ul> -->
				</div>
			</div>
		</div>
        <div class="col-md-3 col-centered">
			<div class="box-wrapper">
				<div class="box">
					<div class="box-inner">
						<div class="avatar">
                            <img src="./images/upi.jpg" alt="">
                        </div>
						<h3 class="name">UPI Address</h3>
						<h4 class="dept">arunikayadav422@oksbi</h4>

					</div>
					<!-- <ul class="social-list">
						<li><a href="#" class="fa fa-globe" target="_blank"></a></li>
						<li><a href="https://www.facebook.com/mayank.tripathi.507" class="fa fa-facebook" target="_blank"></a></li>
						<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
						<li><a href="mailto:mayank.me16@gmail.com" class="fa fa-envelope"></a></li>
						<li><a href="tel:+917977884481" class="fa fa-mobile"></a></li>
						<li><a href="https://www.linkedin.com/in/mayank-tripathi-84b08b15a/" class="fa fa-linkedin" target="_blank"></a></li>
					</ul> -->
				</div>
			</div>
		</div>
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	</div>

	<!--Team Block-->

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
		$(document).ready(function () {
			$(".home-wrapper").css("top", "27%");
		});
	</script>
	<script src="assets/js/polyfills.js"></script>
	<!-- Loading -->
	<script src="assets/js/loading.js"></script>
	<script src="assets/js/index.js"></script>
	<!-- /Loading -->
	<script src="assets/js/jquery.csv.js"></script>
	<script src="assets/js/jquery.csv.js"></script>
	<script type="text/javascript">
		// $(document).ready(function () {
		// 	var data_coord, data;
		// 	$.when(
		// 		$.ajax({
		// 			type: "GET",
		// 			url: "team/<?php echo $committee; ?>_coord.csv",
		// 			dataType: "text",
		// 			success: function (response) {
		// 				data_coord = $.csv.toObjects(response);
		// 				team(data_coord, "Coordinators");
		// 			}
		// 		})
		// 	).done($.ajax({
		// 		type: "GET",
		// 		url: "team/<?php echo $committee; ?>.csv",
		// 		dataType: "text",
		// 		success: function (resp) {
		// 			data = $.csv.toObjects(resp);
		// 			team(data, "Sub-Coordinators");
		// 		}
		// 	}));






		// 	function team(data, coord) {
		// 		var number = data.length;
		// 		var parent = document.getElementById("parent");
		// 		var div0 = document.createElement("div");
		// 		div0.setAttribute("class", "row");
		// 		div0.setAttribute("style", "padding:2em; color: red; font-size: 1.5em;");
		// 		div0.innerHTML = coord;
		// 		parent.appendChild(div0);
		// 		if (number % 2 == 0) {
		// 			var i;
		// 			for (i = 0; i < number; i += 2) {
		// 				member_row(data, i, 1);
		// 			}
		// 		} else {
		// 			var i;
		// 			for (i = 0; i < number - 1; i += 2) {
		// 				member_row(data, i, 1);
		// 			}
		// 			member_row(data, number - 1, 0);
		// 		}
		// 	}

		// 	function member_row(data, i, even) {
		// 		var name = data[i]['Name'];
		// 		var image = data[i]['Image'];
		// 		var committee = data['Committee']
		// 		var mobile = data[i]['Phone No.'];
		// 		var email = data[i]['email'];
		// 		var fb = data[i]['fb url'];
		// 		var linked = data[i]['Linkedin url'];

		// 		var parent = document.getElementById("parent");
		// 		var div = document.createElement("div");
		// 		div.setAttribute("class", "row");
		// 		div.setAttribute("style", "padding:2em;");
		// 		parent.appendChild(div);

		// 		var div1 = document.createElement("div");
		// 		div1.setAttribute("class", "col-sm-2");
		// 		div.appendChild(div1);

		// 		var img = document.createElement("img");
		// 		img.setAttribute("style", "border-radius:50%;width:7em;height:7em;");
		// 		img.setAttribute("src", "images/team/" + image);
		// 		div1.appendChild(img);

		// 		var div2 = document.createElement("div");
		// 		div2.setAttribute("class", "col-sm-4");
		// 		div.appendChild(div2);

		// 		var h2 = document.createElement("h2");
		// 		h2.setAttribute("style", "text-decoration:none");
		// 		h2.innerHTML = name;
		// 		div2.appendChild(h2);

		// 		var h4 = document.createElement("h4");
		// 		h4.setAttribute("style", "color: red;");
		// 		h4.innerHTML = "Contact: ";
		// 		div2.appendChild(h4);

		// 		var span = document.createElement("span");
		// 		span.setAttribute("style", "color: black; padding-left: 5px;");
		// 		span.innerHTML = mobile;
		// 		h4.appendChild(span);

		// 		var h41 = document.createElement("h4");
		// 		h41.setAttribute("style", "color: red;");
		// 		h41.innerHTML = "Email: ";
		// 		div2.appendChild(h41);

		// 		var span_1 = document.createElement("span");
		// 		span_1.setAttribute("style", "color: black; padding-left: 5px;");
		// 		span_1.innerHTML = email;
		// 		h41.appendChild(span_1);
		// 	}


		// });
	</script>
	<?php include 'gAnalytics.php'; ?>
</body>

</html>
