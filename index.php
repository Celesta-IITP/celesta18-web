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

    <link rel="stylesheet" href="./css/animation.css">

    <link rel="stylesheet" href="./css/demo.css">

    <link rel="stylesheet" href="./css/loader.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script>
$(function() {

  $("#rf").submit(function(e) {
$("#loader_gif").fadeIn();
    // validate and process form here
console.log("clicked");
    e.preventDefault();

    var fname = $("input[name=fname]").val().trim();

    var email = $("input[name=email]").val().trim();

    var college = $("input[name=college]").val().trim();
    var password = $("input[name=password]").val();

    var phone = $("input[name=phone]").val().trim();

    if (validate(fname, email, college, phone,password)) {

     
      $.post("http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/register",
            {
              name: fname,
              emailid:email,
              password:password,
              mobile:phone,
              college:college
            },
            function(data, status){
              console.log("Response");
              console.log("Data: " + data + "\nStatus: " + status);
              if(status=='success'){//$("#myloader").fadeOut();
              $("#loader_gif").fadeOut();

                console.log(data);

                if(data["status"]=="200"){
                  $('.success').show();            
                  $("#greet").html('<center><b>Registration Successful</b><br>A confirmation email has been sent.</center>');
                  $("#greet").fadeIn();
                  // $("#greet").css('background','#5FAB22');
                  id01.style.display = "none";
                }else{
                  console.log("err");
              $("#loader_gif").fadeOut();
                  $("#errorBanner").fadeIn();
                   $("#errorBanner").html('<center><b>Error occured<br>'+data["message"]+'</center>');
              }
//              $('html, body').animate({
//                      scrollTop: $("#header").offset().top
//                  }, 500);
 
              }else{//$("#myloader").fadeOut();
                  $("#errorBanner").fadeIn();
              $("#loader_gif").fadeOut();
                  $("#errorBanner").fadeIn();
                  $("#errorBanner").html('An error occured.<br> Please try again.');
                  
                  console.log("Failed "+data);

                }
                },"json");
      

    }

  });

});

      </script>
    <style type="text/css">

/*=============================== Basic ===============================*/

    body {background-image: url("../img/bg.png");}

    .visible {display: block;}

    .layer {display: none;}

    .layer.one {

      display: block;

      background: #fff url("./images/bg_img.jpg") no-repeat center fixed;

      background-size: cover;

    }

    .content {

      display: block;

      width: 100%;

      height: 100%;

      overflow: auto;

      margin: 0 auto;

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

      </head>

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

        $('#loading').delay(350).fadeOut();

      });   

      </script>

      <nav style="position: fixed;z-index: 10;width: 100%">

        <ul class="links" id="nav">

          <li><a data-page="home" href="#">Home</a></li>

          <li><a data-page="events" href="Events.php">Events</a></li>
          <li><a   href="Workshop/ai.htm"  >Workshop</a> </li>
          <li><a data-page="spons" href="images/schedule.png" download >Schedule</a></li>

          <li><a data-page="contacts" href="#">Team</a></li>

          <li><a data-page="contacts" href="#">Sponsors</a></li>
          
          <li><a data-page="contacts" href="Gallery/gallery.php">Gallery</a></li>
          <?php
            if(isset($_SESSION['uid'])){
              $name = explode(" ",$_SESSION['name']) ;

              echo "<li>Hi ".$name[0]."! <a  href=\"login.php?act=logout\">Log Out</a></li>";
            }else{
              echo "<li><a  href=\"login.php\">Login</a></li>
              <li><a onclick=\"document.getElementById('id01').style.display='block'\" class=\"cd-signup\" data-page=\"register\" href=\"#\">Register</a></li>
              ";
            }
          ?>
          

          <li><a data-page="contacts" href="#">About</a></li>

          <li class="icon"><a href="javascript:void(0);" onclick="nav();">&#9776;</a></li>

        </ul>

      </nav>

<div id="live" style="
    top: 50px;
    position: absolute;
    z-index: 10;
    font-size: 20px;
    background: rgba(0,0,0,0.4);
    padding: 10px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
">Live online events:<br><a href="http://sparkfun.celesta.org.in">->SparkFun</a><br><a href="images/schedule.png" download >->Schedule</a></div>
      <script type="text/javascript"></script>
    <?php include 'reg.php'; ?>
        <article class="kontext capable animate">

          <div id="particles" class="layer one right show">

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

        <script type='text/javascript' src='./js/jquery.particleground.min.js'></script>

        <script src="./js/transitions.js"></script>

        <!--<ul class="bullets"><li class="active" index="0"></li><li class="" index="1"></li><li class="" index="2"></li></ul>-->

        <script type="text/javascript">

          var k = kontext( document.querySelector( '.kontext' ) );

          function loader(Id ,pageUrl){

            $(Id).load(pageUrl);

          }

          $(document).ready(function() {

            $('#particles').particleground({

              dotColor: 'rgba(0,0,255,0.16)',

              lineColor: 'rgba(255,0,0,0.12)',

              density: 7500

              });

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

</body></html>
