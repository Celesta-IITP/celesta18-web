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
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/CLST_logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Log in | Celesta</title>
  <style>
      a:visited
      {
        color:#fff ;
      }
    #logout{
      /*display: none;*/
    }
    body{
      display: none;
      color:#FFFFFF;
      background: #000000 url("images/login_background_2.jpg") no-repeat center fixed; 
    }

    .ok{
        display: block;  
    }   

  </style>
  
  <link rel='stylesheet prefetch' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../style.css">
<script>
  function goHome(){
      window.location="http://celesta.org.in";
  }
  
  $(document).ready(function () {
  <?php
    $id = "";
    if(isset($_SESSION['uid'])){
      echo"$('.login').hide(); $('body').html('Already Logged In as ".$_SESSION['name']."-".$_SESSION['uid'].".<br><a style=\'color:#FFFFFF\' href=\'login.php?act=logout\' id=\'logout\'>Logout here</a>'); $('#logout').fadeIn();";
    }else{
      $url = $_SERVER['REQUEST_URI'];
      $param = explode("?",$url);
      $id = substr($param[1],0,4);
      $key = substr($param[1],4);
      $check = ($id*12)+147; 
      if(sha1($check)==$key){
    ?>
        $("body").addClass("ok");
        ok = 1;
    <?php 
      }else{
    ?>
      $("body").html("<h1><center>This URL doesnot exist!</center></h1>");
      $("body").addClass("ok");
  <?php }
      }
  ?>

  var ok = 0;
  $(document).ready(function(){
  });

  var parameters = location.search.substring(1).split("?");
  var param = parameters[0];
  var id = param.substring(0,4);

  function check(value, pattern){
      if(value.match(pattern)){
         return true;
      } else {
          return false;
      }
  }

  function validate(pass,conf){
      if(pass==""){
          $("#errorBanner").text("Password blank!");
          return false;
      }
      if(pass!=conf){
          $("#errorBanner").text("Password and Confirm password should be same!");
          return false;
      }
      return true;   
  }
  
  $("#submit").click(function(e) {
      
      $("#loader_gif").fadeIn();
      // validate and process form here
      console.log("clicked");
      e.preventDefault();
      var pass = $("#pass").val().trim();
      var conf = $("#conf").val().trim();
      if (validate(pass,conf)) {
        $.post("//<?php echo $_SERVER['HTTP_HOST']; ?>/apiLe/reset",
            {
                id : id,
                password: pass
            },
            function(data, status){
              console.log("Response");
              console.log("Data: " + data + "\nStatus: " + status);
              if(status=='success'){
                $("#loader_gif").fadeOut();
                console.log(data);
                if(data["status"]=="200"){
                  $('.success').show();            
                  $(".success").fadeIn();
                  setTimeout(function(){goHome();},1000);
                  $(".login_fields").fadeOut();
                }else if(data["status"]=="402"){
                  $("#errorBanner").fadeIn();
                   $("#errorBanner").html('<center><b>Error! Could not change password<br>');
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

<script>
function goBack() {
    window.history.back();
}
</script>
</head>
<body>
<div class="cross" style="z-index: 50; position: absolute;top: 10px; right:0px;;margin-right: 10px;text-decoration: none;" >
  <a class="cross_me" onclick = "goBack()" >
    <i class="fa fa-window-close fa-4x" aria-hidden="false"></i>
</a>
</div>
<div class='login'>
  <div style="text-align: center;" class='login_title'>
    <span ><h2 style=" font-family: 'Dancing Script', cursive; margin-top: -20px;margin-bottom: 20px;font-size:2em;">Welcome</h2>Reset Celesta login Password<br> Your Celesta ID is : CLST<?php echo $id; ?></span>
  </div>
  <br><br>
  <div class='login_fields'>
      <div class='login_fields__password'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;;">New Password:</span>
      <input style="margin-top: 2px;" autocomplete="off" id="pass" placeholder='Confirm Password' type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
      <div class='login_fields__password'>
      <span style="color: #FFFFFF;width:100%;text-align: center;transform: translateX(-50%);left: 10%;position: relative;;">Confirm Password:</span>
      <input style="margin-top: 2px;" autocomplete="off" id="conf" placeholder='Password' type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
    <div class='login_fields__submit'>
      <div id="errorBanner" style="color: #FF0000">    
    </div>
      <input id="submit" type='submit' value='reset'><img id="loader_gif" style="display: none;" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
      <div class="create_accnt" style="padding-top: 8px; color: white;"><br>
          <span style="color:red">You can still login even if your account hasn't yet been confirmed.</span><br>
      </div>
    </div>
  </div>
  <div class='success'>
    <h2>Reset Password Success</h2>
    <p>Welcome back<br>Redirecting...</p>
    
  </div>
  
<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
</div>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script>
    $("#pass").focus(function(){
        $("#pass").css("color","white");
        $("#pass").css("transition-property","background");
        $("#pass").css("transition","0.6s");
        $("#pass").css("background","black");
    });      
    $("#pass").focusout(function(){
        $("#pass").css("color","#a9a9a9");
        $("#pass").css("background","#32364a url('../images/input.jpg') no-repeat center fixed");
    });

    $("#conf").focus(function(){
        $("#conf").css("color","white");
        $("#conf").css("transition-property","background");
        $("#conf").css("transition","0.6s");
        $("#conf").css("background","black");
    });      
    $("#conf").focusout(function(){
        $("#conf").css("color","#a9a9a9");
        $("#conf").css("background","#32364a url('../images/input.jpg') no-repeat center fixed");
    });      
  
</script>
</div>
</body>
</html>
