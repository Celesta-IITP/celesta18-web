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
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css">
        <link rel="stylesheet" href="gallery.css">
        <link rel="stylesheet" href="flickity_styles.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="gallery.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <link rel="stylesheet" href="../plugins/html5up-parallelism/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../plugins/html5up-parallelism/assets/css/noscript.css" /></noscript>
    </head>

    <body class="is-preload">
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
                        <li><a href="/">Home</a></li>
                        <li><a href="/events.html">Events</a></li>
                        <!-- <li><a href="#">Schedule</a></li> -->
                        <!-- <li><a href="#">Team</a></li> -->
                        <!-- <li><a href="#">Sponsors</a></li> -->
                        <li><a href="/reg">Register</a></li>
                        <li><a  href="/login">Login</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper" id="wrapper">
            <header class="section">
                <p id="heading"> Celesta </p>
                <p id="subheading">Photo Gallery</p>
                <p id="subtext">Pictures captured by Celesta IITP</p>
            </header>

            <div class="container">

                <!-- Slider div -->
                <div class="carousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
                <?php
                    $dirname = "gallery_pics/";
                    $images = glob($dirname."*.JPG");
                    foreach($images as $image) {
                        echo '<img src="'.$image.'">';
                    }
                ?>
                </div>
                
                <!-- Parrallelism section -->
                <section>
                    <div class="items">
                        <?php
                            $dirname = "gallery_pics/1";
                            $images = glob($dirname."*_min.JPG");
                            foreach($images as $image) {
                                echo '<article class="item thumb span-1">';
                                    echo '<a href="'.substr($image, 0, -10).'.JPG"'.' class="image">';
                                        echo '<img src="'.$image.'">';
                                    echo '</a>';
                                echo '</article>';
                            }
                        ?>
                    </div>
                    <div class="item">
                        <?php
                            $dirname = "gallery_pics/2";
                            $images = glob($dirname."*_thumb.JPG");
                            foreach($images as $image) {
                                echo '<article class="item thumb span-1">';
                                    echo '<a href="'.substr($image, 0, -10).'.JPG"'.' class="image">';
                                        echo '<img src="'.$image.'">';
                                    echo '</a>';
                                echo '</article>';
                            }
                        ?>
                    </div>
                    <div class="item">
                        <?php
                            $dirname = "gallery_pics/3";
                            $images = glob($dirname."*_thumb.JPG");
                            foreach($images as $image) {
                                echo '<article class="item thumb span-1">';
                                    echo '<a href="'.substr($image, 0, -10).'.JPG"'.' class="image">';
                                        echo '<img src="'.$image.'">';
                                    echo '</a>';
                                echo '</article>';
                            }
                        ?>
                    </div>
                </section>
            </div>
        </div>
        <br>
        <br>
                    
        <!-- Header background gradient -->
        <script type="text/javascript" src="changingGradient.js"></script>

        <!-- Parrallelism Scripts -->
        <script src="../plugins/html5up-parallelism/assets/js/jquery.min.js"></script>
        <script src="../plugins/html5up-parallelism/assets/js/jquery.poptrox.min.js"></script>
        <script src="../plugins/html5up-parallelism/assets/js/browser.min.js"></script>
        <script src="../plugins/html5up-parallelism/assets/js/breakpoints.min.js"></script>
        <script src="../plugins/html5up-parallelism/assets/js/util.js"></script>
        <script src="../plugins/html5up-parallelism/assets/js/main.js"></script>

        <!-- <?php include '../reg.php'; ?> -->
    </body>
</html>