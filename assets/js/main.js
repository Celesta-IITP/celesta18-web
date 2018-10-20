(function($) {
	"use strict"

	// Scrollspy
	$('body').scrollspy({
		target: '#nav',
		offset: $(window).height() / 2
	});

	// Mobile nav toggle
	$('.navbar-toggle').on('click',function() {
		$('.main-nav').toggleClass('open');
	});

	$('.main-nav').on('click', function(){
			$('.main-nav').toggleClass('open');
	});

	// Fixed nav
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();
		wScroll > 50 ? $('#header').addClass('fixed-navbar') : $('#header').removeClass('fixed-navbar');
	});

	// Smooth scroll
	$(".main-nav a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 800);
	});

	// Section title animation
	$('.section-title').each(function() {
		var $this = $(this);
		$this.find('.title > span').each(function(i) {
			var $span = $(this);
			var animated = new Waypoint({
				element: $this,
				handler: function()
				{
					setTimeout(function(){
						$span.addClass('appear')
					}, i*250);
					this.destroy();
				},
				offset: '95%'
			});
		});
	});

	// Galery Owl
	$('#galery-owl').owlCarousel({
		items:1,
		loop:true,
		margin:0,
		dots : false,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay : true,
		autoplaySpeed :500,
		navSpeed :500,
		responsive : {
	    0 : {
	       stagePadding : 0,
	    },
	    768 : {
	        stagePadding : 120,
	    }
		}
	});

	// Parallax Background
	$.stellar({
		responsive: true
	});

	// CountTo
	$('.counter').each(function() {
		var $this = $(this);
		var counter = new Waypoint({
			element: $this,
			handler: function()
			{
				$this.countTo();
			},
			offset: '95%'
		});
	});

// User button click event ----------------------------------------------------------------

	$('.user_mob').on('click', function(){
		if ($('.arrow_mob').hasClass('fa-caret-right')){
			$('.arrow_mob').removeClass('fa-caret-right').addClass('fa-caret-down');
		}else{
			$('.arrow_mob').removeClass('fa-caret-down').addClass('fa-caret-right');
		}
		$('.user_nav_mob').toggleClass('open');
	});

	$('.user_desk').on('click', function(){
		if ($('.arrow_desk').hasClass('fa-caret-right')){
			$('.arrow_desk').removeClass('fa-caret-right').addClass('fa-caret-down');
		}else{
			$('.arrow_desk').removeClass('fa-caret-down').addClass('fa-caret-right');
		}
		$('.user_nav_desk').toggleClass('open');
	});

// End of button click event --------------------------------------------------------------

// Countdown Home page --------------------------------------------------------------------- 

	$('#date-countdown').countdown('2018/10/28', function(event) {
  		var $this = $(this).html(event.strftime(''
    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
  	});
})(jQuery);




