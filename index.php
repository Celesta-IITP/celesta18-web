<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta name="google-site-verification" content="qUmyqM9K6PlBm7mKg3Rpk0JniY6W5_stkbtOFozfgAo" />
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<title>Celesta</title>
    	<meta name="description" content="Celesta, IIT Patna Technical Fest">
    	<meta name="author" content="Creatives IIT Patna">
    	<meta name="keywords" content="celesta iitp, celesta iit patna, celesta.org.in, Celesta, IITP, IIT Patna, Indian Institute of Technology Patna, Technical Fest IIT Patna">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component1.css" />
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<script src="assets/js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

	</head>
	<body>
	<div style="background: url('images/bg_img.jpg') no-repeat center; background-size: 95% auto; border: 1% solid white; width: 100%; height: 100%;">
		<!-- LOADING PART ------------------------------------------------------------------------------------->
		<div class="loading-page">
  			<div class="counter">
    			<h2 class="ml1" style="font-size: 1.5em; width: 500px; margin-left: -150px;">
  					<span class="text-wrapper">
    				<span class="line line1"></span>
    				<span class="letters">WELCOME TO CELESTA</span>
    				<h2 class="letters" style="font-size: 2em; font: pattaya; color: red;">REMASTERED</h2>
    				<span class="line line2"></span>
  					</span>
				</h2>
				<h1>0%</h1>
    			<hr/>
  			</div>		
    		<div class="loader-section section-left"></div>
    		<div class="loader-section section-right"></div>
		</div>
		<!-- LOADING PART END -------------------------------------------------------------------------------->

		<!-- CANVAS ON BACKGROUND ---------------------------------------------------------------------------->
		 
		<!-- CANVAS END -------------------------------------------------------------------------------------->
		
		<div id="particles" style="position: fixed; width: 100%; height: 100%; z-index: 3;"></div>
		<div class="container">
			
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon" id="nouse"><span></span></a>
				<span onclick="myFunction()" class="right" id="user1" style="background-color: rgba(0,0,0,0.8);"><a class="codrops-icon"><span>
				<?php
                    if(isset($_SESSION['uid'])){
                      $name = explode(" ",$_SESSION['name']) ;
                      echo "Hi ".$name[0]."!<a href=\"login.php?act=logout\" id=\"signup\">Logout</a>";
                    }
                    else {
                        echo "<a href=\"login.php\" id=\"login\">login</a><a href=\"/register\" id=\"signup\">signup</a>";
                    }
                ?>  
            	</span></a></span>
			</div>
			
				
			<header style="display: none; color: white; font-size: 2.5em; width: 100%; position: absolute; z-index: 4;">
				<!--header-->
			</header>
			<section>
			</section>
			<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">MENU</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a id="gallery" href="gallery.php"><span class="icon-picture"></span></a></li>
				      <li><a id="ca" href="ca/index.php"><span class="icon-star"></span></a></li>
				      <li><a id="home" href="index.php"><span class="icon-home"></span></a></li>
				      <li><a id="events" href="#"><span class="icon-calendar"></span></a></li>
				      <li><a id="about" href="#"><span class="icon-envelope-alt"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay" style="padding-top: 2%;"></div>
				<!-- End Nav Structure -->
			</div>
		</div><!-- /container -->
	</div>
		<script src="assets/js/polyfills.js"></script>
		<script src="assets/js/demo1.js"></script>
		<!-- For the demo ad only -->   
<script src="assets/js/index.js"></script>
<script src="assets/js/main.js"></script>
<script type='text/javascript' src='./js/jquery.particleground.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
	$(document).ready(function(){
		$("#home").mouseenter(function(){
			$("#cn-overlay").html("<center><strong><h1>HOME</h1></strong><center>");
		}).mouseleave(function(){
			$("#cn-overlay").html("");
		});

		$("#gallery").mouseenter(function(){
			$("#cn-overlay").html("<center><strong><h1>GALLERY</h1></strong><center>");
		}).mouseleave(function(){
			$("#cn-overlay").html("");
		});

		$("#ca").mouseenter(function(){
			$("#cn-overlay").html("<center><strong><h1>CAMPUS AMBASSADOR</h1></strong><center>");
		}).mouseleave(function(){
			$("#cn-overlay").html("");
		});

		$("#events").mouseenter(function(){
			$("#cn-overlay").html("<center><strong><h1>EVENTS</h1></strong><center>");
		}).mouseleave(function(){
			$("#cn-overlay").html("");
		});

		$("#about").mouseenter(function(){
			$("#cn-overlay").html("<center><strong><h1>ABOUT</h1></strong><center>");
		}).mouseleave(function(){
			$("#cn-overlay").html("");
		});


		$('#particles').particleground({

              dotColor: 'rgba(0,0,255,0.37)',

              lineColor: 'rgba(255,0,0,0.22)',

              density: 10000

              });

	});
</script>
<script type="application/ld+json">

        {

          "@context": "http://schema.org/",

          "@type": "event",

          "offers": {

            "@type": "offer",

            "name": "cash",

            "url": "http://celesta.org.in"

          },

          "url": "http://celesta.org.in",

          "startDate":"22-10-2016",

          "endDate":"23-10-2016",

          "name": "Celesta",

          "performer": "everyone",

          "location" : {

            "@type": "place",

            "address": "IIT Patna, Bihta (801103)",

            "name": "IIT Patna"

          },

          "image": "http://celesta.org.in/images/bg_img.jpg",

          "description": "Celesta Is A Technical Fest of IIT Patna",

          "aggregateRating": {

            "@type": "AggregateRating",

            "ratingValue": "4.5",

            "reviewCount": "276",

            "bestRating": "5",

            "worstRating": "1"

          }

        }

        </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121974846-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121974846-1');
</script>

	</body>
</html>
