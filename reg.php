
      <!-- ========================================= Modal Form Start =================================================-->

      <div id="id01" class="modal">  

      <form id="rf" class="modal-content animate" action="" >

        <div class="con">
          <h2 style="color:#000000;text-align:center;">Register</h2>
          <!-- <label><b>Full Name</b></label> -->

          <input type="text" placeholder="Enter Full Name" name="fname" required>

          <span class="error">*Enter Valid Name<br></span>

          <!-- <label><b>College</b></label> -->

          <input type="text" placeholder="Enter College" name="college" required>

          <span class="error">*Enter Valid College Name<br></span>

          <!-- <label><b>Email</b></label> -->

          <input type="text" placeholder="Enter Email" name="email" required>

          <span class="error">*Enter Valid Email<br></span>

          <!-- <label><b>Phone</b></label> -->

          <input type="text" placeholder="Enter 10 digit mobile number" name="phone" required>

          <span class="error">*Enter Valid Phone No.<br></span>
          <!-- <label><b>Password</b></label> -->

          <input type="password" placeholder="*****" name="password" required>

          <span class="error">*Enter Valid Password.<br></span>
<!-- 
          <label><b>City</b></label>

          <input type="text" placeholder="Enter City" name="city" required>

          <span class="error">*Enter Valid City Name<br></span> -->
          <button class="submit" type="submit">Register</button><center >
            <div id="errorBanner" style="color:#FF0000;display: none;"></div>
        <img id="loader_gif" style="display: none" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Gallery/loading.gif" alt="" height="60">
</center>
        </div>

        <div class="con" style="background-color:#f1f1f1">

          <button type="reset" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

          <!-- <span class="psw"><a href="#">Already Registered?</a></span> -->

        </div>

      </form>

      </div>

    <div id="id02" class="modal success">  

      <div class="modal-content animate">



    <div id="greet" class="con" style="color: #000000">

      <h2>Registration Succesful!</h2>

    </div>

    <div class="con" style="background-color:#f1f1f1">

      <button type="reset" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Close</button>

    </div>

      </div>

    </div>

<script>

  function nav() {

      var x = document.getElementById("nav");

      if (x.className === "links") {

        x.className += " responsive";

      } else {

        x.className = "links";

      }

  }

  function nav2() {

    var x = document.getElementById("nav");

    x.className = "links";

  }

  function nav3() {

    var x = $("leftBox");

    x.className = "opened";

  }

// Get the modal

var id01 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {

    if (event.target == id01) {

        id01.style.display = "none";

    }

}

var id02 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it

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

      </script><!-- =========================================  Modal Form End  =================================================-->
