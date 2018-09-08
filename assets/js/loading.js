// Loading content animations --------------------------------------------------------

jQuery(document).ready(function($){

	/*setTimeout(function(){
        $('body').addClass('loaded');
    }, 3000);*/

	//open menu
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
    duration: 600,
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
	
});

// Loading Counter ------------------------------------------------------------------------- 

$(document).ready(function($) {
  
  var counter = 0;
  var c = 0;
  var i = setInterval(function(){
      $(".loading-page .counter1 h1").html(c + "%");
      $(".loading-page .counter1 hr").css("width", c + "%");
      //$(".loading-page .counter").css("background", "linear-gradient(to right, #f60d54 "+ c + "%,#0d0d0d "+ c + "%)");

    /*
    $(".loading-page .counter h1.color").css("width", c + "%");
    */
    counter++;
    c++;
      
    if(counter == 101) {
        clearInterval(i);
    }
  }, 20);

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       //document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      counter = 80;
      c = 80;
      setTimeout(function(){
         $('body').addClass('loaded');

         /*document.getElementById('interactive');
         document.getElementById('bo').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";*/
      },1000);
  }
}

});
