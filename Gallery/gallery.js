$(document).ready(function(){
	
	var KEYCODE_ENTER = 13;
	var KEYCODE_ESC = 27;
	
	//For checking if fotorama has been initialized or not
	var Fnotinit = true;

	var id = 0;

	// Fotorama API objects
	var $fotoramaDiv, fotorama;

	//Hide the fotorama the close button is clicked on
	$('.closebtn').on('click', function() {
		$("#myNav").fadeOut(200);
	});

	//If Enter is pressed, open gallery with the first photo
	//If Esc is pressed, close gallery (if open)
	$(document).keyup(function(e) {
	  if (e.keyCode == KEYCODE_ENTER) $('.hovereffect')[0].click();
	  if (e.keyCode == KEYCODE_ESC) $('.closebtn').click();
	});


	//Show the fotorama gallery when an image is clicked on
	$('.hovereffect').on('click', function() {
		
		$("#myNav").fadeIn(200);

	// Since initializing fotorama as a hidden object breaks it
	// known bug: https://github.com/artpolikarpov/fotorama/issues/406
	// initialization is being done later when it is shown
		if(Fnotinit)
		{
			$("#myNav").fadeIn(200);
			// 1. Initialize fotorama manually.
		    $fotoramaDiv = $('.fotorama').fotorama();

		    // 2. Get the API object.
		    fotorama = $fotoramaDiv.data('fotorama');

		    // 3. Inspect it in console.
		    console.log(fotorama);
		    //set Fnotinit to false since fotorama has been initialized now
		    Fnotinit = false;
		}

		$("#myNav").fadeIn(200);

		//Extract the id of the image and scroll to it
		id = parseInt(this.getAttribute('id'));
		fotorama.show(id);

	});
});