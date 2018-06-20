<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTP-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Celesta IITP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400, 700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="gallery.css">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="gallery.js"></script>
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

    .close:hover, .close:focus {
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



    @keyframes animatezoom {

    /*======================================================================*/

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
        <nav class="navbar navbar-fixed-top navbar-inverse" style="margin:0px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="gallery.php" style="color: #f1f1f1; text-decoration: none;"><b>CELESTA &nbsp;  GALLERY</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../Events.php">Events</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Sponsors</a></li>
                        <li><a onclick="document.getElementById('id01').style.display='block'" class="cd-signup" data-page="register" href="#">Register</a></li>
                        <li><a  href="../login.html">Login</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>

            <!-- The gallery overlay -->
            <div id="myNav" style="display: none; width: 100%;" class="overlay">
                <p><a href="#" class="closebtn"">&times;</a></p>
                <div class="overlay-content">
                    <div class="fotorama"
                        data-click="true"
                        data-swipe="false"
                        data-width="100%"
                        data-height="97%"
                        data-minwidth="400"
                        data-minheight="300"
                        data-transition="slide"
                        data-arrows="true"
                        data-keyboard='{"space": true, "home": true, "end": true, "up": true, "down": true}'
                        data-fit="cover"
                        data-clicktransition="crossfade"
                        data-keyboard="true"
                        data-nav="thumbs"
                        data-hash="true"
                        data-loop="true"
                        data-startindex="0"
                        data-auto="false">

                        <img src="../Posters/Aqua Soccer.jpg" data-caption="">
                        <img src="../Posters/capture the flag.jpg" data-caption="">
                        <img src="../Posters/chem charades.jpg" data-caption="">
                        <img src="../Posters/Lensart FINAL.JPG" data-caption="">
                        <img src="../Posters/Tech Exhibition.jpg" data-caption="">
                        <img src="../Posters/Robowars.jpg" data-caption="">
                        <img src="../Posters/rocket propulsion.jpg" data-caption="">
                        <img src="../Posters/parliamentary debatenew.jpg" data-caption="">
                        <img src="../Posters/chem-e-switch.jpg" data-caption="">
                        <img src="../Posters/sparkfun.jpg" data-caption="">
                    </div>
                </div>
            </div>
        </nav>

        <header>
            <p id="heading"> Celesta </p>
            <p id="subheading">Photo Gallery</p>
            <p id="subtext">Pictures captured by Celesta IITP</p>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="0">
                            <img class="img-responsive" src="../Posters/Aqua Soccer.jpg" alt="">
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="1">
                            <img class="img-responsive" src="../Posters/capture the flag.jpg" alt="">
                             </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="2">
                            <img class="img-responsive" src="../Posters/chem charades.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="3">
                            <img class="img-responsive" src="../Posters/Lensart FINAL.JPG" alt="">
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect bigimg" id="4">
                            <img class="img-responsive" src="../Posters/Tech Exhibition.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect bigimg" id="5">
                            <img class="img-responsive" src="../Posters/Robowars.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="6">
                            <img class="img-responsive" src="../Posters/rocket propulsion.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="7">
                            <img class="img-responsive" src="../Posters/parliamentary debatenew.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)">
                        <div class="hovereffect" id="8">
                            <img class="img-responsive" src="../Posters/chem-e-switch.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)0">
                        <div class="hovereffect" id="9">
                            <img class="img-responsive" src="../Posters/sparkfun.jpg" alt="">
                           
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <script type="text/javascript"></script>
        <?php include '../reg.php'; ?>

    </body>
</html>