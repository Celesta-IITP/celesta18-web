<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="assets/js/jquery.min.js"></script>
</head>
<body>
<form name="myForm">
  Type of event:(event=1/workshop=2/exhibition=3) <br>
  <input type="text" name="event">
  <br>
  Name:<br>
  <input type="text" name="name" >
  <br>
  Catagory:<br>
  <input type="text" name="catagory">
  <br>
  Date:<br>
  <input type="text" name="date">
  <br>
  Time:<br>
  <input type="text" name="time">
  <br>
  Venue:<br>
  <input type="text" name="venue">
  <br>
  About:<br>
  <input type="text" name="about">
  <br>
  Organised:<br>
  <input type="text" name="organised">
  <br>
  Contact:<br>
  <input type="text" name="contact">
  <br>
  Rules:<br>
  <input type="text" name="rules">
  <br><br>
  <input id="submit-form" type="submit" value="Submit">
</form> 
<br><div id="fill"></div>
</body>
<script type="text/javascript">
	$(document).ready(function () {

    $("#submit-form").click(function (event) {

        event.preventDefault();

		// array
        var search = {}
		search["name"] = document.forms["myForm"]["name"].value;
		search["catagory"] = document.forms["myForm"]["catagory"].value;
		search["date"] = document.forms["myForm"]["date"].value;
		search["time"] = document.forms["myForm"]["time"].value;
		search["venue"] = document.forms["myForm"]["venue"].value;
		search["about"] = document.forms["myForm"]["about"].value;
		search["organised"] = document.forms["myForm"]["organised"].value;
		search["contact"] = document.forms["myForm"]["contact"].value;
		search["rules"] = document.forms["myForm"]["rules"].value;
		var id = document.forms['myForm']["event"].value;
		var file_name = "";
		var message = "";
		$.ajax({
        	type: "GET",
        	dataType : 'json',
        	async: false,
        	url: "savetojson.php",
        	data: { file: id , name: search['name'], catag: search['catagory'] },
        	success: function (data) {alert("created!"); console.log(data); file_name = data['file']; message = data['message']; 
                                    var contents = JSON.stringify(search);
    	                             document.getElementById("fill").innerHTML = "<h3>"+message+"</h3><h3> gedit eventdata/"+file_name+" (paste this in terminal inside celesta local repo, then paste the below line)</h3><br>"+contents;},
        	failure: function(data) {alert("Error!"); console.log(data)}
    	});

    	

    });

});

</script>
</html>
