<?php
session_start();
?>
<!DOCTYPE html>
 
<html lang="en">

	<head>

    <meta name="google-site-verification" content="qUmyqM9K6PlBm7mKg3Rpk0JniY6W5_stkbtOFozfgAo" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Celesta</title>

    <meta name="description" content="Celesta, IIT Patna Technical Fest">

    <meta name="author" content="Creatives IIT Patna">

    <meta name="keywords" content="celesta iitp, celesta iit patna, celesta.org.in, Celesta, IITP, IIT Patna, Indian Institute of Technology Patna, Technical Fest IIT Patna">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   	<link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="./css/animation.css">

    <link rel="stylesheet" href="./css/demo.css">

    <link rel="stylesheet" href="./css/loader.css">
    <style type="text/css">

/*=============================== Basic ===============================*/

    body {
      background-image: url("../img/bg.png");
      overflow: hidden;
    }

    .visible {display: block;}

    .layer {display: none;}

    .layer.one {

      display: block;

      background: url("images/bg_img.jpg");

      background-size: cover;

    }


    #home {padding: 0;}

    #home canvas {}

          #particles {

            width: 100%;

            height: 100%;

            overflow: hidden;

          }

          #intro {

            position: absolute;

            left: 0;

            top: 50%;

            padding: 0 20px;

            width: 100%;

            text-align: center;

          }

          /* Add Zoom Animation */

          .animate {

            -webkit-animation: animatezoom 0.6s;

            animation: animatezoom 0.6s

          }
          /*============= Top Link Bar ============*/

          ul.links {

            list-style-type: none;

            margin: 0;

            padding: 0;

            overflow: hidden;

            background-color: #333;

          }

          ul.links li {float: left;}

          ul.links li a {

            display: inline-block;

            color: #f2f2f2;

            text-align: center;

            padding: 14px 16px;

            text-decoration: none;

            transition: 0.3s;

            font-size: 17px;

          }

          ul.links li a:hover {background-color: #555;}

          ul.links li.icon {display: none;}
    /*=====================================================================*/

    /*=============================== Modal ===============================*/

    /* Full-width input fields */

    input[type=text], input[type=password] {

        width: 100%;

        padding: 12px 20px;

        margin: 8px 0;

        display: inline-block;

        border: 1px solid #ccc;

        box-sizing: border-box;

      }

    /* Set a style for all buttons */

    .con button {

        background-color: #4CAF50;

        color: white;

        padding: 14px 20px;

        margin: 8px 0;

        border: none;

        cursor: pointer;

        width: 100%;

      }

    /* Extra styles for the cancel button */

    .cancelbtn {

        width: auto;

        max-width: 100px;

        padding: 10px 18px;

        background-color: #f44336;

      }

    /* Center the image and position the close button */

    .imgcontainer {

        text-align: center;

        margin: 24px 0 12px 0;

        position: relative;

      }

    img.avatar {

        width: 40%;

        border-radius: 50%;

      }

    .con {

        padding: 16px;

      }

    span.psw {

        float: right;

        padding-top: 16px;

      }

    /* The Modal (background) */

    .modal {

        display: none; /* Hidden by default */

        position: fixed; /* Stay in place */

        z-index: 1; /* Sit on top */

        left: 0;

        top: 0;

        width: 100%; /* Full width */

        height: 100%; /* Full height */

        overflow: auto; /* Enable scroll if needed */

        background-color: rgb(0,0,0); /* Fallback color */

        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

        padding-top: 60px;

      }
    /*========================== Footer ==========================*/
      #sfooter {
        clear: both;
        display: block;
        height: 40px;
        width: 100%;
        background-color: transparent;
        font-size: 100%;
        font-family: sans-serif;
        color: #e2e2e2;
        position: absolute;
        bottom: 52px;
        padding: 5px;
        text-shadow: 1px 1px 2px 10px rgba(255,255,255,0.10);
      }
      #sm {
        vertical-align: middle;
        text-decoration: none;
        color: #f2f2f2;
      }
      #fl {
        float: right;
        position: relative;
      }
      #fl a img {
          width: 30px;
          height: 30px;
          border-collapse: collapse;
          border-radius: 50%;
      }
      .f {
        display: inline;
      }
    /*=====================================================================*/
    #id01{overflow:auto;}

    /* Modal Content/Box */

    .modal-content {

      max-width: 500px;

      background-color: #fefefe;

      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

      border: 1px solid #888;

      width: 80%; /* Could be more or less, depending on screen size */

    }

    /* The Close Button (x) */

    .close {

        position: absolute;

        right: 25px;

        top: 0;

        color: #000;

        font-size: 35px;

        font-weight: bold;

      }

    .close:hover,

    .close:focus {

        color: red;

        cursor: pointer;

      }

.clsbtn {
display: none;
}

      .error {display: none;color: red;}

    /*======================================================================*/

    /*============================== Key Frames ============================*/

    @-webkit-keyframes animatezoom {

        from {-webkit-transform: scale(0)}

        to {-webkit-transform: scale(1)}

      }



    @keyframes animatezoom {

        from {transform: scale(0)}

        to {transform: scale(1)}

      }

    /*======================================================================*/

    /*=========================== Media Queries ============================*/

    @media screen and (max-width:680px) {

      ul.links li:not(:first-child) {display: none;}

      ul.links li.icon {

        float: right;

        display: inline-block;

      }

      body {

        font-size: 120%;

      }

    }

    @media screen and (max-width:768px) {

      body {

        font-size: 120%;

      }

    }

    @media screen and (max-width:680px) {

      ul.links.responsive {position: relative;}

      ul.links.responsive li.icon {

        position: absolute;

        right: 0;

        top: 0;

      }

      ul.links.responsive li {

        float: none;

        display: inline;

      }

      ul.links.responsive li a {

        display: block;

        text-align: left;

      }

      .modal-content {

          width: 75%;

      }

    }

    /* Change styles for span and cancel button on extra small screens */

    @media screen and (max-width: 400px) {

        .modal-content {

          width: 95%;

        }

        span.psw {

           display: block;

           float: none;

        }

        .cancelbtn {

           width: 100%;

        }
         .clsbtn {
           position: fixed;
           top:0;
           right:0;
           display: block;
           cursor: pointer;
           width: 30px;
		   height:30px;
        }
        .opened {
           display: block;
           position: fixed;
           height: 100%;
           width: 100%;

        }
       


      }

    /*======================================================================*/
#live a{
  text-decoration: none;
  color:#FFFFFF;
}
#live a:hover{
  text-decoration: none;
  color:#3cfff9;
}
    </style>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<style type="text/css">
body{
	background: linear-gradient(to right, #bab9b9,#bab9b9,blue,white,white,blue,#bab9b9,#bab9b9);
	background : white;
	background-size: 100% auto;
  overflow: hidden;
}

@media screen and (max-width: 1400px) {

			#footer {
				position: relative;
				bottom: 0;
			}

				#footer .inner {
					height: auto;
					display: block;
				}

					#footer .inner .content,
					#footer .inner .copyright {
						display: block;
						width: 100%;
						text-align: center;
					}

				#footer .info {
					display: none;
				}

		}

</style>
<body>

<div id="loading">

      <div id="loading-center">

        <div id="loading-center-absolute">

          <div class="object" id="first_object"></div>

          <div class="object" id="second_object"></div>

          <div class="object" id="third_object"></div>

        </div>

      </div>

</div>

    <script type="text/javascript">

      $(window).load(function(){

        $('#loading').delay(350).fadeOut("slow", function(){
            $('#main').css("display", "block");
            $('.layer.one').css("background", "#fff");
            $('#particles').particleground({

              dotColor: 'rgba(0,0,255,0.27)',

              lineColor: 'rgba(255,0,0,0.12)',

              density: 7500

              });
        });
      
     });   

      </script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<div id="live" style="
    top: 50px;
    position: absolute;
    z-index: 10;
    font-size: 20px;
    background: rgba(0,0,0,0.4);
    padding: 10px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
">Upcoming events:<br><a href="Workshop/ai.htm" >->Workshop</a></div>
      <script type="text/javascript"></script>
    <?php include 'reg.php'; ?>
        <article class="kontext capable animate">

          <div class="layer one right show">

            <!-- Header -->
      <header id="header">
        <div class="close common" style="position: absolute; z-index: 2000; ">&times</div>
        <div class="inner">
          <div class="content">
            <h1>Home</h1>
            <h2>
            <a href="#">Events</a><br>
            <a href="#">Workshop</a><br>
            <a data-page="schedule" href="images/schedule.png" download>Schedule</a><br>
            <a href="#">Team</a><br>
            <a href="#">Sponsers</a><br>
            <a data-page="contacts" href="Gallery/gallery.php" >Gallery</a><br>
            </h2>
            <?php
                    if(isset($_SESSION['uid'])){
                      
                      $name = explode(" ",$_SESSION['name']) ;

                      echo "Hi ".$name[0]."! <a class="button big alt" href=\"login.php?act=logout\"><span>Log Out</span></a>";
                    
                    }
                    
                    else {
                      
                        echo "<a class="button big alt" href=\"login.php\"><span>Login</span></a>
                        <b><br>Haven't registered yet <a class=\"cd-signup\" data-page=\"register\" href=\"Register.php\">Register</a></b>";
                    
                    }
                ?>
          </div>
          <a href="#" id="data" class="button hidden common"><span>Let's Go</span></a>
        </div>
      </header>

    <!-- Main -->
          <div id="main">
              <div class="inner">
                <div id="particles" style="position: absolute; z-index: 2;"></div>
                <img align="middle" style="width: 100%; " src="images/bg_img.jpg">
              </div>
          </div>

          <div id="intro">
            
          </div>
       
          </div>

          <div class="layer two right">

            <div id="events" class="content">

              

            </div>

          <div class="dimmer"></div></div>

          <div class="layer three right hide">

            <div class="content" id="spons">

         

          </div>

          <div class="dimmer"></div></div>

          <div class="layer four right">

            <div class="content" id="contacts">

         

          </div>

          <div class="dimmer"></div></div>

        </article>

        <!-- Footer -->
      <footer id="footer">
        <a href="#" class="info fa fa-info-circle"><span>About</span></a>
        <div class="inner">
          <div class="content">
            <h3>About Celesta 2k18</h3>
            <p>In tempor porttitor nisl non elementum. Nulla ipsum ipsum, feugiat vitae vehicula vitae, imperdiet sed risus. Fusce sed dictum neque, id auctor felis. Praesent luctus sagittis viverra. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla.</p>
          </div>
          <div class="copyright">
            <h3>Follow us</h3>
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
          
          </div>
        </div>
      </footer>

        <script type='text/javascript' src='./js/jquery.particleground.min.js'></script>

        <script src="./js/transitions.js"></script>

        <!--<ul class="bullets"><li class="active" index="0"></li><li class="" index="1"></li><li class="" index="2"></li></ul>-->

        <script type="text/javascript">



          var k = kontext( document.querySelector( '.kontext' ) );


          function loader(Id ,pageUrl){

            $(Id).load(pageUrl);

          }

          $(document).ready(function() {

            $('#main').css("display", "none");

            

            $('.intro').css({

              'margin-top': -($('.intro').height() / 2)

            });

            var links = $(".links li a");

            var home = links.eq(0);

            var events = links.eq(1);

            var spons = links.eq(2);

            var contacts = links.eq(3);

            var register = links.eq(4);

            home.on("click",function() {

              nav2();

              k.show(0);

            });

            events.on("click",function() {

              nav2();

              k.show(1);

            });

            spons.on("click",function() {

              nav2();

              k.show(2);

            });

            contacts.on("click",function() {

              nav2();

              k.show(3);

            });

            register.on("click",function() {

              nav2();

              k.show(4);

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

</body>
</html>