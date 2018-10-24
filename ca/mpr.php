<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0</span>Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="shortcut icon" href="../images/CLST_logo.ico">
    <title>MPR</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Preparation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/jquery-main.js"></script>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- // Meta Tags -->
    <!--booststrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo_bbb.svg">
</head>

<body>
<header>
    <div class="banner1">
        <div class="header-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <div class="hedder-up">
                        <h1>
                            <img src="../images/logo_bbb.svg" alt="">
                            <a class="navbar-brand" href="#">MPR</a>
                        </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-item" href="index.php">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a href="judging.html" class="nav-link">Judging Criteria</a>
                            </li>
                            <li class="nav-item">
                                <a href="#bottom" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //Navigation -->
    </div>
</header>
<section class="typo">
    <div class="container">
        <div id="mpr">
            <div>
                <h1>Instructions</h1>
                <ul>
                    <li>Enter id of the CA you want to add score of.</li>
                    <li>And fill up the other boxes accordingly</li>
                    <li>Click the submit button when all three are filled.</li>
                </ul>
            </div>
            <div class="form-fields-agileinfo form-inline">
                <label class="label">Celesta ID</label>
                <input type="text" name="ID" id="CLST_ID" placeholder="1234">
                <label class="label">Points</label>
                <input type="number" name="points" id="contactNum" placeholder="0"></label>
                <label class="label">Remarks</label>
                <input type="text" name="remarks" id="caemail" placeholder="Remarks">
                <button class="btn btn-primary" id="search" style="background: blue">Submit</button>
                <img id="loader_gif" style="display: none;" src="../Gallery/loading.gif" alt="" height="60"><br>
                <div id="errorBanner" style="color: red;"></div>
            </div>
            <div id="info"></div>
        </div>
            </script>
        </div>
    </div>
</section>
<footer>
    <section class="w3ls_address_mail_footer_grids">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 w3ls_footer_grid_left">
                    <h5 class="sub-head">Address</h5>
                    <p> Indian Institute of Technology Patna, Bihta
                        <span>Patna-801106 (Bihar)</span>
                    </p>
                </div>
                <div class="col-sm-4 w3ls_footer_grid_left">
                    <h5 class="sub-head">Contact Us</h5>
                    <p>
                        <span>9955532583</span>
                        <span>8169154128</span>
                        <span>8058201770</span>
                    </p>
                </div>
                <div class="col-sm-4 w3ls_footer_grid_left">
                    <h5 class="sub-head">Mail Us</h5>
                    <p>
                        <a href="mailto:rishabh.ee16@iitp.ac.in">rishabh.ee16@iitp.ac.in</a>
                        <a href="mailto:ilagaraju.ch17@iitp.ac.in">ilagaraju.ch17@iitp.ac.in</a>
                    </p>
                </div>
            </div>

        </div>
    </section>
</footer>
<section class="copyright-wthree">
    <div class="container">
        <div class="w3l-social">
            <ul>
                <li>
                    <a href="https://www.facebook.com/CelestaIITP/" class="fab fa-facebook"></a>
                </li>
                <li>
                    <a href="https://twitter.com/celesta_iitp" class="fab fa-twitter"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/celestaiitp_official/" class="fab fa-instagram"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/celesta-iit-patna-3722b6166" class="fab fa-linkedin-in"></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- //Footer -->


<!--js working-->
<script src="js/jquery.min.js"></script>
<!--//js working-->
<!-- requried-jsfiles-for owl -->
<!-- smooth scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">

    // Function to fetch table data from the html elements to be sent to server----------------------------------

    function getTableData(table) {
        var data = [];
        table.find('tr').each(function (rowIndex, r) {
            if(rowIndex>0){
                var cols = [];
                $(this).find('td').each(function (colIndex) {
                    var x = "";
                    if(colIndex==2){
                        x = $(this).find('input').val();
                    }
                    else{
                        x = $(this).text().trim();
                    }

                    if(rowIndex>17 && colIndex==0 ){
                        x = $(this).find('input').val();
                    }
                    cols.push(x);
                });
                data.push(cols);
            }
        });
        return data;
    }

    // End of function to geet table data -----------------------------------------------

    $(document).ready(function(){        

        function check(value, pattern){

            if(value=="") return true;

            if(value.match(pattern)){
                return true;
            } else {
                return false;
            }
        }

        function validate(email, phone, id) {
            var phoneRegex = '^[0-9]+$';
            var idRegex = '^([0-9]{4})$'; 

            if(phone=="" || id==""){
                $("#errorBanner").text("Please fill all the requried credentials");
                return false;  
            } 

            bphone = check(phone, phoneRegex);
            if(!bphone){
                $("#errorBanner").text("Invalid Points");
                return false;
            }

            bid = check(id, idRegex);
            if(!bid){
                $("#errorBanner").text("Invalid ID");
                return false;   
            }
            return true;
        }

        $("#search").click(function(){
            
            // Ajax query to search CA entered by the pr team -----------------------------------------------

            remarks = $("input[name=remarks]").val().trim();
            if(remarks==""){
                remarks="-";
            }
            points = $("input[name=points]").val().trim();
            id = $("input[name=ID]").val().trim();

            if(validate(remarks, points, id)){
                $("#errorBanner").fadeOut();
                $("#loader_gif").fadeIn();
                $.post("//<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/ca_submit",
                    {
                        remarks:remarks,
                        points: points,
                        id: id,
                        sender: "<?php if(!isset($_SESSION['uid'])){echo "";}else{echo $_SESSION['uid']; }?>"
                    },
                    function(data, status){
                        console.log("<?php if(!isset($_SESSION['uid'])){echo "not set";}else{echo $_SESSION['uid']; }?>");
                        console.log("Response");
                        console.log("Data: " + data + "\nStatus: " + status);
                        if(status=='success'){
                            console.log(data);

                            if(data["status"]=="200"){         
                                $("#loader_gif").fadeOut();
                                $("#info").html("<h3>Submitted successfully!</h3>");
                                $("#info").css("display","block");
                            }else if(data['status']=="402"){
                                $("#loader_gif").fadeOut();
                                $("#errorBanner").html("Unauthorised user!");
                                $("#errorBanner").fadeIn();                                
                            }else{
                                console.log("err");
                                $("#loader_gif").fadeOut();
                                $("#errorBanner").html('<center><b>Error occured<br>'+data["message"]+'</b></center>');
                                $("#errorBanner").fadeIn();
                            }
                        }else{
                            $("#loader_gif").fadeOut();
                            $("#errorBanner").html('An error occured.<br> Please try again.');
                            $("#errorBanner").fadeIn();
                            console.log("Failed "+data);
                        }
                    }
                ,"json");
            }else{
                $("#errorBanner").fadeIn();
                $("#loader_gif").fadeOut();
            }
    
        });        
    });
    
</script>
<!-- //here ends scrolling icon -->
<!-- //smooth scrolling -->
<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //scrolling script -->

<!--bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>

</html>
