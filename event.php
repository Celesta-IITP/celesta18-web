<!DOCTYPE html>
 
<html lang="en">

  <head>

    <meta name="google-site-verification" content="qUmyqM9K6PlBm7mKg3Rpk0JniY6W5_stkbtOFozfgAo" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Celesta Events</title>

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
      overflow: scroll;
    }

    .visible {display: block;}

    .layer {display: none;}

    .layer.one {

      transition-property: background;
      transition-timing-function: ease-in;
      transition: 1.2s;
      display: block;

      background: url("images/bg_img.jpg");

      background-size: cover;

    }

    #main {
      transition-property: opacity;
      transition-timing-function: ease-in;
      transition: 1.5s;
      overflow-y: scroll;
      opacity: 0;

      height: 100%;
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
            $('#main').css("opacity", "1");
            $('.layer.one').css("background", "#fff");
        });
      
     });   

      </script>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

<!--<div id="live" style="
    top: 50px;
    position: absolute;
    z-index: 10;
    font-size: 20px;
    background: rgba(0,0,0,0.4);
    padding: 10px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
">Upcoming events:<br><a href="Workshop/ai.htm" >->Workshop</a></div>-->
      <script type="text/javascript"></script>
        <article class="kontext capable animate">

          <div class="layer one right show">

            <!-- Header -->
      <header id="header">
        <div class="close common" style="position: absolute; z-index: 2000; ">&times</div>
        <div class="inner">
          <div class="content">
            <h1>Events</h1><br>
            <h2>
            <div id="home">Home</div>
            <div id="Workshop">Workshop</div>
            <div id="Schedule">Schedule</div>
            <div id="Team">Team</div>
            <div id="Sponsers">Sponsers</div>
            <div id="Gallery">Gallery</div>
            </h2><br>
            <?php
                    if(isset($_SESSION['uid'])){
                      
                      $name = explode(" ",$_SESSION['name']) ;

                      echo "Hi ".$name[0]."! <div class=\"button big alt\" id=\"logout\"><span>Log Out</span></div>";
                    
                    }
                    
                    else {
                      
                        echo "<div class=\"button big alt\" id=\"login\"><span>Login</span></div>
                        <b><br>Haven't registered yet <p class=\"cd-signup\" data-page=\"register\" id=\"register\">Register</p></b>";
                    
                    }
                ?> 
          </div>
          <a href="#" id="data" class="button hidden common"><span>Let's Go</span></a>
        </div>
      </header>

    <!-- Main -->
          <div id="main">
              <div class="inner">
                <div class="columns">

            <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>

            <!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>

            <!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>

            <!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/vert.jpg" alt="" /></a>
              </div>
              <div class="image fit">
                <a href="detail1.html"><img src="images/horiz.jpg" alt="" /></a>
              </div>

          </div>
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

            $('.intro').css({

              'margin-top': -($('.intro').height() / 2)

            });

            function transit(n) {
                k.show(n);
            }

            function load_page(url) {
                window.location = url;
            }

            /*var home = links.eq(1);

            var spons = links.eq(2);

            var contacts = links.eq(3);

            var register = links.eq(4);

            home.on("click",function() {

              nav2();

              k.show(0);

            });*/

            $("#home").on("click",function() {
                transit(1);
                setTimeout(function() {
                  load_page("index.php");
                },400);
            });


            $("#Workshop").on("click",function() {
                transit(2);
                setTimeout(function() {
                  load_page("event.html");
                },400);
            });


            $("#Schedule").on("click",function() {
                transit(3);
                setTimeout(function() {
                  load_page("event.html");
                },400);
            });


            $("#Team").on("click",function() {
                transit(4);
                setTimeout(function() {
                  load_page("event.html");
                },400);
            });


            $("#Sponsers").on("click",function() {
                transit(5);
                setTimeout(function() {
                  load_page("event.html");
                },400);
            });


            $("#Gallery").on("click",function() {
                transit(6);
                setTimeout(function() {
                  load_page("event.html");
                },400);
            });

            
            $("#logout").on("click",function() {
                transit(1);
                setTimeout(function() {
                  load_page("login.php?act=logout");
                },400);
            });


            $("#login").on("click",function() {
                transit(1);
                setTimeout(function() {
                  load_page("login.php");
                },400);
            });


            $("#register").on("click",function() {
                transit(1);
                setTimeout(function() {
                  load_page("Register.php");
                },400);
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
