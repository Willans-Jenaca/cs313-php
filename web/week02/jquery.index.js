(function($) {
    var x = 0;
    var y = 0;
    // cashe a reference to the banner
    var banner = $("#banner");
    
    // set initial banner background position
    banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');
    
    // scroll up background position every 90 milliseconds
    var stopAnimation = window.setInterval(function() {
	    banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');
	    y++; // vertical scroll
	    //x--; // horizontal scroll
       
	    // stop animation
	    if (y > 800) {
		window.clearInterval(stopAnimation);
	    }
	}, 90);
}) (jQuery);