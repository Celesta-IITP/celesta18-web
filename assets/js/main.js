jQuery(document).ready(function($){
	//open menu
	$('.cd-menu-trigger').on('click', function(event){
		event.preventDefault();
		$('#cd-main-content').addClass('move-out');
		$('#main-nav').addClass('is-visible');
		$('.cd-shadow-layer').addClass('is-visible');
	});
	//close menu
	$('.cd-close-menu').on('click', function(event){
		event.preventDefault();
		$('#cd-main-content').removeClass('move-out');
		$('#main-nav').removeClass('is-visible');
		$('.cd-shadow-layer').removeClass('is-visible');
	});

	//clipped image - blur effect
	set_clip_property();
	$(window).on('resize', function(){
		set_clip_property();
	});

	function set_clip_property() {
		var $header_height = $('.cd-header').height(),
			$window_height = $(window).height(),
			$header_top = $window_height - $header_height,
			$window_width = $(window).width();
		$('.cd-blurred-bg').css('clip', 'rect('+$header_top+'px, '+$window_width+'px, '+$window_height+'px, 0px)');
	}

	setTimeout(function(){
        $('body').addClass('loaded');
    }, 3000);

    // loading printing celesta --------------------------------------------------------------

    // Wrap every letter in a span
	$('.ml1 .letters').each(function(){
  		$(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
	});

	anime.timeline({loop: true})
  		.add({
    	targets: '.ml1 .letter',
  		scale: [0.3,1],
    	opacity: [0,1],
    	translateZ: 0,
    	easing: "easeOutExpo",
    	duration: 1500,
    	delay: function(el, i) {
    		return 70 * (i+1)
    	}
  	}).add({
    	targets: '.ml1 .line',
    	scaleX: [0,1],
    	opacity: [0.5,1],
    	easing: "easeOutExpo",
    	duration: 700,
   		offset: '-=875',
    	delay: function(el, i, l) {
    		return 80 * (l - i);
   		}
  	}).add({
    	targets: '.ml1',
    	opacity: 0,
    	duration: 1000,
    	easing: "easeOutExpo",
    	delay: 1000
  	});

  	// nd loading ----------------------------------------------------------------------------

});
