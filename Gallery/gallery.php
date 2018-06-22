<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTP-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Celesta IITP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400, 700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css">
        <link rel="stylesheet" href="gallery.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="gallery.js"></script>

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

        <!-- <script type="text/javascript"></script> -->
        <!-- <?php include '../reg.php'; ?> -->

    </body>
</html>