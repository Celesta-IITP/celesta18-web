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
  <title>Celesta2k18 Login</title>
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
<script type="text/javascript">
  function goHome(){
      window.location="http://celesta.org.in";
  }
  
  $(document).ready(function () {
  <?php
    /* if(isset($_SESSION['uid'])){
      //echo"$('.login_title').html('Logged In as ".$_SESSION['name']."-".$_SESSION['uid'].".<br><a style=\'color:#FFFFFF\' href=\'login.php?act=logout\' id=\'logout\'>Logout here</a>'); $('#logout').fadeIn();";
      }*/
  ?>
  function check(value, pattern){
      if(value.match(pattern)){
         return true;
      } else {
          return false;
      }
  }
  
  function validate(id,pass){
      $("#errorBanner").fadeOut();
      var idRegex = '^[Cc][Ll][Ss][Tt]([0-9]{4})$'; 
          bid = check(id,idRegex);
      if(!bid){
          $("#errorBanner").fadeIn();
          $("#errorBanner").text("Invalid ID");
          return false;
      }
      return true;
      
  }
  
  $("#submit").click(function(e) {
      
      $("#loader_gif").fadeIn();
      // validate and process form here
      console.log("clicked");
      e.preventDefault();
      var id = $("#email").val().trim();
      var pass = $("#pass").val().trim();
      if (validate( id,pass)) {
        $.post("http://<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/switchtoCA/",
            {
                username: id,
                password: pass
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
                   $(".success").html('<h2>Switching Account Successful</h2><p>Welcome back,<b>CA Registration Successfully completed</b><br>Your Campus Ambassador referral ID is "'+data['id']+'". You can ask people to register using this four digit code as the CA referral code when they register for Celesta.<br>Redirecting...</p>')
                   setTimeout(function(){goHome();},1000);
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
<div class="cross" style="z-index: 50; position: absolute;top: 10px; right: 0px;margin-right: 10px;text-decoration: none;" >
<a class="cross_me" href="//celesta.org.in" >
<i class="fa fa-window-close fa-4x" aria-hidden="false"></i>
</a>
</div>
<div class='login'>
  <div style="text-align: center;" class='login_title'>
    <span><h2 style="margin-bottom: -1px;">Switch Your regular account to CA(Campus Ambassador)</h2></span>
  </div>
  <br>
  <div class='login_fields'>
    <div class='login_fields__user'>
      <span style="color: #FFFFFF; width:100%; text-align: center; transform: translateX(-50%); left: 10%; position: relative;">Celesta Id:</span><br>
      <!-- <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>Email
       --><input style="margin-top: 2px;" autocomplete="off" placeholder='ID: CLST1234' id="email" type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
    </div>
    <div class='login_fields__password'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;">Password:</span>
      <input style="margin-top: 2px;" autocomplete="off" id="pass" placeholder='Password' type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
    <div class='login_fields__submit'>
      <div id="errorBanner" style="color: #FF0000">
    
  </div>
      <input id="submit" type='submit' value='Switch'><img id="loader_gif" style="display: none;" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
      <div class='forgot'>
          <a href='reset.php' style="font-size: 1.4em; color: white;">Forgot Password?</a>
      </div>
      <div class="create_accnt" style="padding-top: 10px; color: pink;">
          Dont have an account? <a style="color: white;" href="register.php">Create Account</a>
      </div>
    </div>
  </div>
  <div class='success'>    
  </div>

<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Switching...</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script>
    $("#email").focus(function(){
        $("#email").css("color","white");
        $("#email").css("transition-property","background");
        $("#email").css("transition","0.6s");
        $("#email").css("background","black");
    });      
    $("#email").focusout(function(){
        $("#email").css("color","#a9a9a9");
        $("#email").css("background","#32364a url('input.jpg') no-repeat center fixed");
    });      
    
    $("#pass").focus(function(){
        $("#pass").css("color","white");
        $("#pass").css("transition-property","background");
        $("#pass").css("transition","0.6s");
        $("#pass").css("background","black");
    });      
    $("#pass").focusout(function(){
        $("#pass").css("color","#a9a9a9");
        $("#pass").css("background","#32364a url('input.jpg') no-repeat center fixed");
    });      
  
</script>
</div>
</body>
</html>
