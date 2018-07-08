<?php
session_start();

if(isset($_GET['act'])){
  if($_GET['act']=='logout'){
    $_SESSION['uid']=null;
    $_SESSION['name']=null;
    session_destroy();
  header( "refresh:0; url=http://celesta.org.in" );
  }
}

?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Celesta2k18 Registration</title>
  <style>
      a:visited
      {
        color:#fff ;
      }
    #logout{
      /*display: none;*/
    }
    body{
      color:#FFFFFF;
      background: #000000 url("images/bg_login.png") no-repeat center fixed;
      background-size: 100% auto;
    }

    // ------------------ Media Queries ---------------------------------

    // ------------------------------------------------------------------    
  </style>
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="style.css">
<script>
  function goHome(){
    window.location="http://celesta.org.in";
  }
      </script>
</head>

<body>

<div class="cross" style="position: absolute;top: 10px; right: 0px;margin-right: 10px;text-decoration: none;" >
<a class="cross_me" href="//celesta.org.in" >
<i class="fa fa-window-close fa-4x" aria-hidden="false"></i>
</a>
</div>
<div class='login' style=" padding: 30px 40px 80px 40px; height: 450px; top: 42px;">
  <div style="text-align: center;" class='login_title'>
    <span><h2 style="margin-bottom: -1px;">Welcome!!</h2>Register to Celesta2k18</span>
  </div>
  <br>
  <div class='login_fields'>
    <div class='login_fields__user name'>
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">Full Name:</span><br>
      <input style="margin-top: 2px;" autocomplete="off" placeholder="Full Name" id="name" name="fname" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
      <span class="error">*Enter Valid Name<br></span>
    </div>
    <div class="login_fields__user email">
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">College:</span><br>
      <input style="margin-top: 2px;" autocomplete="off" placeholder='College Name' id="college" name="college" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
      <span class="error">*Enter Valid College Name<br></span>
    </div>
    <div class="login_fields__user email">
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">Email:</span><br>
      <input style="margin-top: 2px;" autocomplete="off" placeholder='Email-ID' id="email" name="email" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
      <span class="error">*Enter Valid Email<br></span>
    </div>
    <div class="login_fields__user email">
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">Mobile:</span><br>
      <input style="margin-top: 2px;" autocomplete="off" placeholder="Mobile Number" id="phone" name="phone" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
      <span class="error">*Enter Valid Mobile Number<br></span>
    </div>
    <div class='login_fields__password'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;">Password:</span>
      <input style="margin-top: 2px;" autocomplete="off" id="pass" placeholder='Password' name="password" type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
        <span class="error">*Enter Valid Password<br></span>
    </div>
    <div class='login_fields__submit'>
      <div id="errorBanner" style="color: #FF0000">
    
  </div>

      <input id="submit" type='submit' value='Register'><img id="loader_gif" style="display: none;" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
      <div class="log" style="padding-top: 10px; color: pink;">
          Already have an account? <a style="color: white;" href="login.php">Login</a>
      </div>
    </div>
  </div>
  
</div>
  <div id="greet" class="con"></div>

  
<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script>

    // ---------------------------- Focus on input boxes --------------------------------------------------- 

    $("#name").focus(function(){
        $("#name").css("color","white");
        $("#name").css("transition-property","background");
        $("#name").css("transition","0.6s");
        $("#name").css("background","black");
    });      
    $("#name").focusout(function(){
        $("#name").css("color","#a9a9a9");
        $("#name").css("background","#32364a url('input.jpg') repeat center fixed");
    });   

    $("#college").focus(function(){
        $("#college").css("color","white");
        $("#college").css("transition-property","background");
        $("#college").css("transition","0.6s");
        $("#college").css("background","black");
    });      
    $("#college").focusout(function(){
        $("#college").css("color","#a9a9a9");
        $("#college").css("background","#32364a url('input.jpg') repeat center fixed");
    });    

    $("#email").focus(function(){
        $("#email").css("color","white");
        $("#email").css("transition-property","background");
        $("#email").css("transition","0.6s");
        $("#email").css("background","black");
    });      
    $("#email").focusout(function(){
        $("#email").css("color","#a9a9a9");
        $("#email").css("background","#32364a url('input.jpg') repeat center fixed");
    });    

    $("#phone").focus(function(){
        $("#phone").css("color","white");
        $("#phone").css("transition-property","background");
        $("#phone").css("transition","0.6s");
        $("#phone").css("background","black");
    });      
    $("#phone").focusout(function(){
        $("#phone").css("color","#a9a9a9");
        $("#phone").css("background","#32364a url('input.jpg') repeat center fixed");
    });    

    $("#pass").focus(function(){
        $("#pass").css("color","white");
        $("#pass").css("transition-property","background");
        $("#pass").css("transition","0.6s");
        $("#pass").css("background","black");
    });      

    $("#pass").focusout(function(){
        $("#pass").css("color","#a9a9a9");
        $("#pass").css("background","#32364a url('input.jpg') repeat center fixed");
    });      

    // ----------------------------- Form Validation -------------------------------------------------------

    function check(value, pattern){

        if(value.match(pattern)){

           return true;
        
        } else {

            return false;
        }

    }

    function validate(fname, email, college, phone, password) {

        $(".error").hide();

        //match email address

        var emailRegex = '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}.[A-Za-z]{2,4}$'; 

        //match full name

        var fnameRegex = "^[a-zA-Z-.' ]{6,32}$";

        //match college

        var collegeRegex = "^[a-zA-Z ]+$";

        //match phone

        var phoneRegex = '^([(\+91)][0-9]{12}|[0-9]{10})$';

        bfname = check(fname, fnameRegex);

        if(!bfname){

            $("input[name=fname]").focus();
            $(".error")[0].style.display = "block";

            return false;
        }

        bcollege = check(college, collegeRegex);

        if(!bcollege){

            $("input[name=college]").focus();
            $(".error")[1].style.display = "block";

            return false;
        }

        bemail = check(email, emailRegex);

        if(!bemail){

            $("input[name=email]").focus();
            $(".error")[2].style.display = "block";

            return false;
        } 

        bphone = check(phone, phoneRegex);

        if(!bphone){

            $("input[name=phone]").focus();
            $(".error")[3].style.display = "block";

            return false;
        }

        if(!password){
        
            $(".error")[4].style.display = "block";
            return false;
        }

        return true;

    }

// ----------------------------------------- Submit button ---------------------------------------------

$(function() {

$("#submit").click(function(e) {

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

     
        $.post("http://<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/register",
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
                  $('.login').fadeOut();
                  $("#greet").html('<center><h2 style="text-decoration: underlined;">Registration Succesful!</h2><b>Registration Successfully completed</b><br>A confirmation email has been sent.</center>');
                  $("#greet").delay(500).fadeIn();
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

</div>
</body>
</html>
