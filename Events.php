<!DOCTYPE html>
<html>
<head>
		<title>Events</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    		<meta name="viewport" content="width=device-width,initial-scale=1">
    		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Thumbnail Hover Effects" />
        <meta name="keywords" content="3d, 3dtransform, hover, effect, thumbnail, overlay, curved, folded" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/cssEvents.css">
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
    		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script>
    		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

		<style type="text/css">
			

		 /* Add Zoom Animation */

          .animate {

            -webkit-animation: animatezoom 0.6s;

            animation: animatezoom 0.6s

          }
         
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

		</style>
</head>
<body>

<nav>

        <ul class="links" id="nav">

          <li><a data-page="home" href="index.php">Home</a></li>

          <li style="background-color: black;" id="eventsTab">Events</li>

          <li><a data-page="sponsers" href="#">Schedule</a></li>

          <li><a data-page="contacts" href="#">Team</a></li>

          <li><a data-page="contacts" href="#">Sponsors</a></li>

          <li><a data-page="contacts" href="Gallery/gallery.php">Gallery</a></li>
          <li><a  href="login.html">Login</a></li>

          <li><a onclick="document.getElementById('id01').style.display='block'" class="cd-signup" data-page="register" href="#">Register</a></li>

          <li><a data-page="contacts" href="#">About</a></li>

          <li class="icon"><a href="javascript:void(0);" onclick="nav();">&#9776;</a></li>

        </ul>

      </nav>

<br><br><br>

		<div id="grid" class="main">
			<div class="view" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" id="img1";>
				<div class="view-back">

					<span style="max-height: 40px; padding-top: 2px; padding-right: 30px;"><h3 style="margin: 0px;"> R</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> O</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> B</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> O</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> T</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 33px;"><h3 style="margin: 0px;"> I</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> C</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px;"><h3 style="margin: 0px;"> S</h3></span>
         	
				</div>
					<img src="imgPS/1.jpg" />
			</div>

      <div id="text1_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>ROBOTICS</span></li>
          <li><a class="text1_li1" href="event/aquasoccer.htm" target="_blank">Aqua Soccer</a></li>
          <li><a class="text1_li2" href="event/robowar.htm" target="_blank">RoboWar</a></li>
          <li><a class="text1_li3" href="event/Maze solver.htm" target="_blank">Maze Solver</a></li>
        </ul>
      </div>
      <div id="Robotics1">Robotics</div>
      </div>


			<div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img2";>
				<div class="view-back">
					<span style="max-height: 40px; padding-top: 40px; padding-right: 40px;"><h3 style="margin: 0px;">B</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 40px;"><h3 style="margin: 0px;">U</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 26px;"><h3 style="margin: 0px;">I-T</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 40px;"><h3 style="margin: 0px;">L</h3></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 40px;"><h3 style="margin: 0px;">D</h3></span>
				</div>
					<img src="imgPS/2.jpg" />
			</div>

      <div id="text2_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Build-!t</span></li>
          <li><a class="text2_li1" href="event/Spagaridge.htm" target="_blank">Spagaridge</a></li>
          <li><a class="text2_li2" href="event/house of cards.htm" target="_blank">House of Cards</a></li>
          <li><a class="text2_li3" href="event/Chem-e-Switch.htm" target="_blank">Chem-e-Switch</a></li>
          <li><a class="text2_li4" href="event/rocket propulsion.htm" target="_blank">Rocket Propulsion</a></li>
          <li><a class="text2_li5" href="event/cad master.htm" target="_blank">CAD Master</a></li>
        </ul>
      </div>
      <div id="Build-It1">Build-It</div>
      </div>
      
      <div id="text1_2222" class="text2222">
    
      <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>ROBOTICS</span></li>
          <li><a class="text1_li1" href="event/aquasoccer.htm" target="_blank">Aqua Soccer</a></li>
          <li><a class="text1_li2" href="event/robowar.htm" target="_blank">RoboWar</a></li>
          <li><a class="text1_li3" href="event/Maze solver.htm" target="_blank">Maze Solver</a></li>
        </ul>
      </div>
      <div id="Robotics2">Robotics</div>
    </div>

    <div id="text2_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Build-!t</span></li>
          <li><a class="text2_li1" href="event/Spagaridge.htm" target="_blank">Spagaridge</a></li>
          <li><a class="text2_li2" href="event/house of cards.htm" target="_blank">House of Cards</a></li>
          <li><a class="text2_li3" href="event/Chem-e-Switch.htm" target="_blank">Chem-e-Switch</a></li>
          <li><a class="text2_li4" href="event/rocket propulsion.htm" target="_blank">Rocket Propulsion</a></li>
          <li><a class="text2_li5" href="event/cad master.htm" target="_blank">CAD Master</a></li>
        </ul>
      </div>
      <div id="Build-It2">Build-It</div>
      </div>

			<div class="view" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" id="img3" ;>
				<div class="view-back">
					<span style="max-height: 40px; padding-top: 50px; padding-right: 15px;"><h3 style="margin: 0px;">L&nbsp&nbsp&nbsp C</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 15px;"><h3 style="margin: 0px;">E&nbsp&nbsp&nbsp O</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 16px;"><h3 style="margin: 0px;">T'&nbsp&nbsp D</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 16px;"><h3 style="margin: 0px;">S&nbsp&nbsp&nbsp E</h2></span>
				</div>
					<img src="imgPS/3.jpg" />
			</div>

      <div id="text3_111" class="text111">
            <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Let's Code</span></li>
          <li><a class="text3_li1" href="event/capture the flag.htm" target="_blank">Capture The Flag</a></li>
          <li><a class="text3_li2" href="event/byterace.htm" target="_blank">ByteRace</a></li>
        </ul>
      </div>
      <div id="Coding1">Let's Code</div>
    </div>

    <div id="text1_332" class="text332">
    
      <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>ROBOTICS</span></li>
          <li><a class="text1_li1" href="event/aquasoccer.htm" target="_blank">Aqua Soccer</a></li>
          <li><a class="text1_li2" href="event/robowar.htm" target="_blank">RoboWar</a></li>
          <li><a class="text1_li3" href="event/Maze solver.htm" target="_blank">Maze Solver</a></li>
        </ul>
      </div>
    
      <div id="Robotics3">Robotics</div>

    </div>

    <div id="text2_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Build-!t</span></li>
          <li><a class="text2_li1" href="event/Spagaridge.htm" target="_blank">Spagaridge</a></li>
          <li><a class="text2_li2" href="event/house of cards.htm" target="_blank">House of Cards</a></li>
          <li><a class="text2_li3" href="event/Chem-e-Switch.htm" target="_blank">Chem-e-Switch</a></li>
          <li><a class="text2_li4" href="event/rocket propulsion.htm" target="_blank">Rocket Propulsion</a></li>
          <li><a class="text2_li5" href="event/cad master.htm" target="_blank">CAD Master</a></li>
        </ul>
      </div>
      <div id="Build-It3">Build-It</div>
      </div>

    
    <div id="text3_332" class="text332">
            <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Let's Code</span></li>
          <li><a class="text3_li1" href="event/capture the flag.htm" target="_blank">Capture The Flag</a></li>
          <li><a class="text3_li2" href="event/byterace.htm" target="_blank">ByteRace</a></li>
        </ul>
      </div>
      <div id="Coding2">Let's Code</div>
    </div>

			<div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img4";>
				<div class="view-back">
					<span style="max-height: 40px; padding-top: 10px; padding-right: 30px; padding-bottom: 1px;"><h4 style="margin: 0px;">M</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 31px; padding-bottom: 1px;"><h4 style="margin: 0px;">A</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px; padding-bottom: 1px;"><h4 style="margin: 0px;">N</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 31px; padding-bottom: 1px;"><h4 style="margin: 0px;">A</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px; padding-bottom: 1px;"><h4 style="margin: 0px;">G</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 31px; padding-bottom: 1px;"><h4 style="margin: 0px;">E</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px; padding-bottom: 1px;"><h4 style="margin: 0px;">M</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 31px; padding-bottom: 1px;"><h4 style="margin: 0px;">E</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 30px; padding-bottom: 1px;"><h4 style="margin: 0px;">N</h4></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 31px; padding-bottom: 1px;"><h4 style="margin: 0px;">T</h4></span>
				</div>
					<img src="imgPS/4.jpeg" />
			</div>

      <div id="text4_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Management</span></li>
          <li><a class="text4_li1" href="event/monopoly.htm" target="_blank">Monopoly</a></li>
          <li><a class="text4_li2" href="event/b-quiz.htm" target="_blank">B-Quiz</a></li>
          <li><a class="text4_li3" href="event/ipl auction.htm" target="_blank">IPL Auction</a></li>
          <li><a class="text4_li4" href="event/e debate.htm" target="_blank">E-Debate</a></li>
          <li><a class="text4_li5" href="event/stockmart.htm" target="_blank">Stockmart</a></li>
        </ul>
      </div>
      <div id="Management3">Management</div>
      </div>

      <div id="text3_2222" class="text2222">
            <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Let's Code</span></li>
          <li><a class="text3_li1" href="event/capture the flag.htm" target="_blank">Capture The Flag</a></li>
          <li><a class="text3_li2" href="event/byterace.htm" target="_blank">ByteRace</a></li>
        </ul>
      </div>
      <div id="Coding3">Let's Code</div>
    </div>


      <div id="text4_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Management</span></li>
          <li><a class="text4_li1" href="event/monopoly.htm" target="_blank">Monopoly</a></li>
          <li><a class="text4_li2" href="event/b-quiz.htm" target="_blank">B-Quiz</a></li>
          <li><a class="text4_li3" href="event/ipl auction.htm" target="_blank">IPL Auction</a></li>
          <li><a class="text4_li4" href="event/e debate.htm" target="_blank">E-Debate</a></li>
          <li><a class="text4_li5" href="event/stockmart.htm" target="_blank">Stockmart</a></li>
        </ul>
      </div>
      <div id="Management1">Management</div>
      </div>

			<div class="view" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" id="img5";>
				<div class="view-back">
					<span style="max-height: 40px; padding-top: 10px; padding-right: 42px; padding-bottom: 2px;"><h3 style="margin: 0px;">T</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 42px; padding-bottom: 2px;"><h3 style="margin: 0px;">R</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 15px; padding-bottom: 2px;"><h3 style="margin: 0px;">E&nbsp&nbsp&nbspH</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 15px; padding-bottom: 2px;"><h3 style="margin: 0px;">A&nbsp&nbsp&nbspU</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 15px; padding-bottom: 2px;"><h3 style="margin: 0px;">S&nbsp&nbsp&nbspN</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 15px; padding-bottom: 2px;"><h3 style="margin: 0px;">U&nbsp&nbsp&nbspT</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 42px; padding-bottom: 2px;"><h3 style="margin: 0px;">R</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 42px; padding-bottom: 2px;"><h3 style="margin: 0px;">E</h2></span>
				</div>
					<img src="imgPS/5.jpg" />
			</div>

      <div id="text5_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Treasure-Hunt</span></li>
          <li><a class="text5_li1" href="event/chem-o-quest.htm" target="_blank">Chem-o-Quest</a></li>
          <li><a class="text5_li2" href="event/sparkfun.htm" target="_blank">Spark Fun</a></li>
          <li><a class="text5_li3" href="event/static rush.htm" target="_blank">Static Rush</a></li>
        </ul>
      </div>
      <div id="Treasure-Hunt1">Treasure Hunt</div>
      </div>

			<div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img6";>
				<div class="view-back">
					<span style="max-height: 40px; padding-top: 16px; padding-right: 30px;"><h3 style="margin: 0px;">D</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 30px;"><h3 style="margin: 0px;">E</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 30px;"><h3 style="margin: 0px;">B</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 30px;"><h3 style="margin: 0px;">A</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 30px;"><h3 style="margin: 0px;">T</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 30px;"><h3 style="margin: 0px;">E</h2></span>
				</div>
					<img src="imgPS/6.jpg" />
			</div>
      
      <div id="text6_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Debate</span></li>
          <li><a class="text6_li1" href="event/parliamentary debate.htm" target="_blank">Parliamentary Debate</a></li>
        </ul>
      </div>
      <div id="Debate3">Debate</div>
      </div>

      <div id="text4_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Management</span></li>
          <li><a class="text4_li1" href="event/monopoly.htm" target="_blank">Monopoly</a></li>
          <li><a class="text4_li2" href="event/b-quiz.htm" target="_blank">B-Quiz</a></li>
          <li><a class="text4_li3" href="event/ipl auction.htm" target="_blank">IPL Auction</a></li>
          <li><a class="text4_li4" href="event/e debate.htm" target="_blank">E-Debate</a></li>
          <li><a class="text4_li5" href="event/stockmart.htm" target="_blank">Stockmart</a></li>
        </ul>
      </div>
      <div id="Management2">Management</div>
      </div>

      <div id="text5_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Treasure-Hunt</span></li>
          <li><a class="text5_li1" href="event/chem-o-quest.htm" target="_blank">Chem-o-Quest</a></li>
          <li><a class="text5_li2" href="event/sparkfun.htm" target="_blank">Spark Fun</a></li>
          <li><a class="text5_li3" href="event/static rush.htm" target="_blank">Static Rush</a></li>
        </ul>
      </div>
      <div id="Treasure-Hunt2">Treasure Hunt</div>
      </div>


      <div id="text6_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Debate</span></li>
          <li><a class="text6_li1" href="event/parliamentary debate.htm" target="_blank">Parliamentary Debate</a></li>
        </ul>
      </div>
      <div id="Debate2">Debate</div>
      </div>


      <div id="text5_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Treasure-Hunt</span></li>
          <li><a class="text5_li1" href="event/chem-o-quest.htm" target="_blank">Chem-o-Quest</a></li>
          <li><a class="text5_li2" href="event/sparkfun.htm" target="_blank">Spark Fun</a></li>
          <li><a class="text5_li3" href="event/static rush.htm" target="_blank">Static Rush</a></li>
        </ul>
      </div>
      <div id="Treasure-Hunt3">Treasure Hunt</div>
      </div>


      <div id="text6_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Debate</span></li>
          <li><a class="text6_li1" href="event/parliamentary debate.htm" target="_blank">Parliamentary Debate</a></li>
        </ul>
      </div>
      <div id="Debate1">Debate</div>
      </div>
      
      <div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img7";>
        <div class="view-back">
          <span style="max-height: 40px; padding-top: 40px; padding-right: 32px;"><h3 style="margin: 0px;">E</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">X</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">P</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">O</h2></span>
        </div>
          <img src="imgPS/7.jpg" />
      </div>

      <div id="text7_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Expo</span></li>
          <li><a class="text7_li1"  href="event/samadhan.htm" target="_blank">Samadhan</a></li>
          <li><a class="text7_li2" href="event/jigyasa.htm" target="_blank">Jigyasa, The School Exhibition</a></li>
          <li><a class="text7_li3" href="event/virtual auto-expo.htm" target="_blank">Virtual Auto-Expo</a></li>
        </ul>
      </div>
      <div id="Expo1">Expo</div>
      </div>

      <div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img8";>
        <div class="view-back">
          <span style="max-height: 40px; padding-top: 8px; padding-right: 30px;"><h3 style="margin: 0px;">Q</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 30px;"><h3 style="margin: 0px;">U</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 35px;"><h3 style="margin: 0px;">I</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 32px;"><h3 style="margin: 0px;">Z</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 29px;"><h3 style="margin: 0px;">W</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 35px;"><h3 style="margin: 0px;">I</h2></span>
          <span style="max-height: 40px; padding-top: 2px; padding-right: 32px;"><h3 style="margin: 0px;">Z</h2></span>
        </div>
          <img src="imgPS/8.jpg" />
      </div>

      <div id="text8_111" class="text111">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Quiz-Wiz</span></li>
          <li><a class="text8_li1" href="event/mind benders.htm" target="_blank">Mind-Benders</a></li>
          <li><a class="text8_li2" href="event/electro-exquizite.htm" target="_blank">Electro-Exquizite</a></li>
          <li><a class="text8_li3" href="event/AstroParticle Voyage.htm" target="_blank">AstroParticle Voyage</a></li>
        </ul>
      </div>
      <div id="Quiz-Wiz2">Quiz-Wiz</div>
      </div>

      <div id="text7_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Expo</span></li>
          <li><a class="text7_li1" href="event/samadhan.htm" target="_blank">Samadhan</a></li>
          <li><a class="text7_li2" href="event/jigyasa.htm" target="_blank">Jigyasa, The School Exhibition</a></li>
          <li><a class="text7_li3" href="event/virtual auto-expo.htm" target="_blank">Virtual Auto-Expo</a></li>
        </ul>
      </div>
      <div id="Expo2">Expo</div>
      </div>

      <div id="text8_2222" class="text2222">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Quiz-Wiz</span></li>
          <li><a class="text8_li1" href="event/mind benders.htm" target="_blank">Mind-Benders</a></li>
          <li><a class="text8_li2" href="event/electro-exquizite.htm" target="_blank">Electro-Exquizite</a></li>
          <li><a class="text8_li3" href="event/AstroParticle Voyage.htm" target="_blank">AstroParticle Voyage</a></li>
        </ul>
      </div>
      <div id="Quiz-Wiz3">Quiz-Wiz</div>
      </div>

      <div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" id="img9";>
        <div class="view-back">
          <span style="max-height: 40px; padding-top: 15px; padding-right: 32px;"><h3 style="margin: 0px;">S</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">O</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">C</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 36px;"><h3 style="margin: 0px;">I</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">A</h2></span>
          <span style="max-height: 40px; padding-top: 5px; padding-right: 32px;"><h3 style="margin: 0px;">L</h2></span>
        </div>
          <img src="imgPS/9.jpg" />
      </div>
     
     <div id="text9_111" class="text111">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Social</span></li>
          <li><a class="text9_li1" href="event/adhyayan.htm" target="_blank">Adhyayan Video Recording</a></li>
        </ul>
      </div>
      <div id="Social2">Social</div>
      </div>

      <div id="text7_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Expo</span></li>
          <li><a class="text7_li1"  href="event/samadhan.htm" target="_blank">Samadhan</a></li>
          <li><a class="text7_li2" href="event/jigyasa.htm" target="_blank">Jigyasa, The School Exhibition</a></li>
          <li><a class="text7_li3" href="event/virtual auto-expo.htm" target="_blank">Virtual Auto-Expo</a></li>
        </ul>
      </div>
      <div id="Expo3">Expo</div>
      </div>

      
      <div id="text8_332" class="text332">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Quiz-Wiz</span></li>
          <li><a class="text8_li1" href="event/mind benders.htm" target="_blank">Mind-Benders</a></li>
          <li><a class="text8_li2" href="event/electro-exquizite.htm" target="_blank">Electro-Exquizite</a></li>
          <li><a class="text8_li3" href="event/AstroParticle Voyage.htm" target="_blank">AstroParticle Voyage</a></li>
        </ul>
      </div>
      <div id="Quiz-Wiz1">Quiz-Wiz</div>
      </div>


      <div id="text9_332" class="text332">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Social</span></li>
          <li><a class="text9_li1" href="event/adhyayan.htm" target="_blank">Adhyayan Video Recording</a></li>
        </ul>
      </div>
      <div id="Social1">Social</div>
      </div>

			<div class="view" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"; id="img10">
				<div class="view-back">
          <span style="max-height: 40px; padding-top: 20px; padding-right: 16px; padding-bottom: 2px;"><h3 style="margin: 0px;">W</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 20px; padding-bottom: 2px;"><h3 style="margin: 0px;">S&nbsp&nbsp&nbspR</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 22px; padding-bottom: 2px;"><h3 style="margin: 0px;">T&nbsp&nbsp&nbsp&nbspI</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 18px; padding-bottom: 2px;"><h3 style="margin: 0px;">O&nbsp&nbsp&nbspT</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 20px; padding-bottom: 2px;"><h3 style="margin: 0px;">R&nbsp&nbsp&nbsp&nbspI</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 16px; padding-bottom: 2px;"><h3 style="margin: 0px;">Y&nbsp&nbsp&nbspN</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 16px; padding-bottom: 2px;"><h3 style="margin: 0px;">G</h2></span>
				</div>
					<img src="imgPS/10.jpg" />
			</div>

      <div id="text10_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Story Writing</span></li>
          <li><a class="text10_li1" href="event/TechChronicles.htm" target="_blank">Tech Chronicles</a></li>
        </ul>
      </div>
      <div id="StoryWriting3"><h1>Tech Chronicles</h1>This pre-celesta event gives the prolific writer in you a chance, a chance to cross the horizons of imagination, to expand the field of one’s view and plot a sci-fi story. It will be your story so it can be anything, literally anything - Alien invasion to humans going to another planet or time-travelling and what not! <br> <b>So just think outside the box, use your imagination, bend the scope of view and write a thriller!</b><br><br><br></div>
      </div>

      <div id="text9_2222" class="text2222">
        <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Social</span></li>
          <li><a class="text9_li1" href="event/adhyayan.htm" target="_blank">Adhyayan Video Recording</a></li>
        </ul>
      </div>
      <div id="Social3">Social</div>
      </div>

      <div id="text10_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Story Writing</span></li>
          <li><a class="text10_li1" href="event/TechChronicles.htm" target="_blank">Tech Chronicles</a></li>
        </ul>
      </div>
      <div id="StoryWriting1"><h1>Tech Chronicles</h1>This pre-celesta event gives the prolific writer in you a chance, a chance to cross the horizons of imagination, to expand the field of one’s view and plot a sci-fi story. It will be your story so it can be anything, literally anything - Alien invasion to humans going to another planet or time-travelling and what not! <br> <b>So just think outside the box, use your imagination, bend the scope of view and write a thriller!</b><br><br><br></div>
      </div>

			<div class="view" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true"; id="img11">
				<div class="view-back">
          <span style="max-height: 40px; padding-top: 32px; padding-right: 20px; padding-bottom: 2px;"><h3 style="margin: 0px;">P&nbsp&nbsp&nbspG</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 20px; padding-bottom: 2px;"><h3 style="margin: 0px;">H&nbsp&nbsp&nbspR</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 19px; padding-bottom: 2px;"><h3 style="margin: 0px;">O&nbsp&nbsp&nbspA</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 21px; padding-bottom: 2px;"><h3 style="margin: 0px;">T&nbsp&nbsp&nbspP</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 19px; padding-bottom: 2px;"><h3 style="margin: 0px;">O&nbsp&nbsp&nbspH</h2></span>
          <span style="max-height: 40px; padding-top: 0px; padding-right: 20px; padding-bottom: 2px;"><h3 style="margin: 0px;">Y</h2></span>
				</div>
					<img src="imgPS/11.jpg" />
			</div>

      <div id="text11_111" class="text111">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Photography</span></li>
          <li><a class="text11_li1" href="event/lensart.htm" target="_blank">LENSART</a></li>
        </ul>
      </div>
      <div id="Photography1"><h1>LENSART</h1>Photography is a tool by which we can freeze the time and have a look back in the past. Celesta 2k17 brings you a chance of showing your photography skills!<br><br><br></div>
      </div>

      <div id="text10_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Story Writing</span></li>
          <li><a class="text10_li1" href="event/TechChronicles.htm" target="_blank">Tech Chronicles</a></li>
        </ul>
      </div>
      <div id="StoryWriting2"><h1>Tech Chronicles</h1>This pre-celesta event gives the prolific writer in you a chance, a chance to cross the horizons of imagination, to expand the field of one’s view and plot a sci-fi story. It will be your story so it can be anything, literally anything - Alien invasion to humans going to another planet or time-travelling and what not! <br> <b>So just think outside the box, use your imagination, bend the scope of view and write a thriller!</b><br><br><br></div>
      </div>

      <div id="text11_332" class="text332">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Photography</span></li>
          <li><a class="text11_li1" href="event/lensart.htm" target="_blank">LENSART</a></li>
        </ul>
      </div>
      <div id="Photography2"><h1>LENSART</h1>Photography is a tool by which we can freeze the time and have a look back in the past. Celesta 2k17 brings you a chance of showing your photography skills!<br><br><br></div>
      </div>


      <div id="text11_2222" class="text2222">
              <div id="navpane1" class="navpane">
        <ul type="none">
          <li><span>Photography</span></li>
          <li><a class="text11_li1" href="event/lensart.htm" target="_blank">LENSART</a></li>
        </ul>
      </div>
      <div id="Photography3"><h1>LENSART</h1>Photography is a tool by which we can freeze the time and have a look back in the past. Celesta 2k17 brings you a chance of showing your photography skills!<br><br><br></div>
      </div>


		</div>
		
   <script type="text/javascript"></script>
<?php include 'reg.php'; ?>

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/jsEvents.js"></script>
</body>
</html>