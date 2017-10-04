<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    #logout{
      /*display: none;*/
    }
    body{
      color:#FFFFFF;
      background: #000000;
    }
  </style>
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="style.css">
<script>
  
$(document).ready(function () {
<?php

if(isset($_SESSION['uid'])){
  echo"$('.login').hide();$('body').html('Already Logged In.<br><a style='color:#FFFFFF' href=\'login.php?act=logout\' id=\'logout\'>Logout here</a>');$('#logout').fadeIn();";
}
if(isset($_POST['act'])){
  if($_GET['act']=='logout'){
    session_unset();
  }
}
 ?>
function check(value, pattern){

  if(value.match(pattern)){

    return true;

  } else {

    return false;

  }

}
function validate(email,pass){

var emailRegex = '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}.[A-Za-z]{2,4}$'; 

  bemail = check(email, emailRegex);

  if(!bemail){

    $("#errorBanner").text("Invalid email");

    return false;

  }
  return true;
}
  $("#submit").click(function(e) {
$("#loader_gif").fadeIn();
    // validate and process form here
console.log("clicked");
    e.preventDefault();

    var email = $("#email").val().trim();

    var pass = $("#pass").val().trim();

    if (validate( email,pass)) {

     
      $.post("http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/login",
            {
              emailid:email,
              password:pass
           },
            function(data, status){
              console.log("Response");
              console.log("Data: " + data + "\nStatus: " + status);
              if(status=='success'){//$("#myloader").fadeOut();
              $("#loader_gif").fadeOut();

                console.log(data);

                if(data["status"]=="200"){
                  $('.success').show();            
                  
                  $(".success").fadeIn();
                  // $("#greet").css('background','#5FAB22');
                  $(".login_fields").fadeOut();
                }else if(data["status"]=="403"){
                  $("#errorBanner").fadeIn();
                   $("#errorBanner").html('<center><b>Invalid Credentials<br>');
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
      

    }else{
              $("#loader_gif").fadeOut();


    }


  });
  
});

      </script>
</head>

<body>
  
<div class='login'>
  <div class='login_title'>
    <span>Login to your account</span>
  </div>
  <div class='login_fields'>
    <div class='login_fields__user'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;">Email:</span>
      <!-- <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>Email
       --><input autocomplete="off" placeholder='email-ID' id="email" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
    </div>
    <div class='login_fields__password'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;">Password:</span>
      <input autocomplete="off" id="pass" placeholder='Password' type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
    <div class='login_fields__submit'>
      <div id="errorBanner" style="color: #FF0000">
    
  </div>

      <input id="submit" type='submit' value='Log In'><img id="loader_gif" style="display: none" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
      <!-- <div class='forgot'>
        <a href='#'>Forgotten password?</a>
      </div> -->
    </div>
  </div>
  <div class='success'>
    <h2>Authentication Success</h2>
    <p>Welcome back</p>
  </div>
  
<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
