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
  <link rel="shortcut icon" href="./images/CLST_logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Register | Celesta</title>
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
      background: #000000 url("images/login_background_1.jpg") no-repeat center fixed;
    }
  </style>
  
  <link rel='stylesheet prefetch' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../style.css">
<script>
  function goHome(){
    window.location="http://celesta.org.in";
  }
      </script>

      <script>
function goBack() {
    window.history.back();
}
</script>
</head>

<body>

<div class="cross" style="position: absolute; z-index: 20; top: 10px; right: 0; margin-right: 10px; text-decoration: none;" >
<a class="cross_me" onclick = "goBack()" >
<i class="fa fa-window-close fa-4x" aria-hidden="false"></i>
</a>
</div>
<div class="login" style=" padding: 30px 40px 80px 40px; height: 350px; top: 150px;">
  <div style="text-align: center;" class='login_title'>
    <span style = "font-family: 'Dancing Script', cursive;"><h2 style="margin-top:-15px;margin-bottom: -1px;font-size:2em;">Reset Password</h2>Reset your Celesta login password</span><br>
  </div>
  
  <br>
  <div class='login_fields'>
    <div class="login_fields__user email">
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">Email:</span><br>
      <input style="margin-top: 2px;" autocomplete="off" placeholder='abc@xyz.com' id="email" name="email" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
      <span class="error">*Enter Valid Email<br></span>
    </div>
    <div class='login_fields__submit'>
      <div id="errorBanner" style="color: #FF0000">
    
  </div>
      <span style="color:red">Make sure you enter the same email id you used while registering.</span><br><br>
      <span style="color:white">For any problems during registration send a screenshot of the error to 7044170063/9673582517</span><br>
      <input id="submit" type='submit' value='Submit '><img id="loader_gif" style="display: none;" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
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
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script>

    // ---------------------------- Focus on input boxes --------------------------------------------------- 

    $("#email").focus(function(){
        $("#email").css("color","white");
        $("#email").css("transition-property","background");
        $("#email").css("transition","0.6s");
        $("#email").css("background","black");
    });      
    $("#email").focusout(function(){
        $("#email").css("color","#a9a9a9");
        $("#email").css("background","#32364a url('../images/input.jpg') repeat center fixed");
    });    

    // ----------------------------- Form Validation -------------------------------------------------------

    function check(value, pattern){

        if(value.match(pattern)){

           return true;
        
        } else {

            return false;
        }

    }

    function validate(email) {

        $(".error").hide();
        //match email address

        var emailRegex = '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}.[A-Za-z]{2,4}$'; 
        bemail = check(email, emailRegex);
        if(!bemail || email==""){

            $("input[name=email]").focus();
            $(".error").fadeIn();

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

    var email = $("input[name=email]").val().trim();

    if (validate(email)) {

     
        $.post("//<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/forgot",
            {
              emailid:email
            },
            function(data, status){
              console.log("Response");
              console.log("Data: " + data + "\nStatus: " + status);
              if(status=='success'){//$("#myloader").fadeOut();
              $("#loader_gif").fadeOut();

                console.log(data);

                if(data["status"]=="200"){         
                  $('.login').fadeOut();
                  $("#greet").html('<center><h2 style="text-decoration: underlined;">Mail Sent!</h2><b>A link has been sent to your email id to reset your password.</b><br>Your celesta ID is CLST'+data['id']+'. If the mail does not appear in your inbox, please check your spam folder. Thank You.</center>');
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
