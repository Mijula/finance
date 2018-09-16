// Scroll to Top Button
jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
			if (jQuery(this).scrollTop() > 100) {
					jQuery('.TopButton').fadeIn();
			} else {
					jQuery('.TopButton').fadeOut();
			}
	});
	jQuery('.TopButton').click(function(){
		 jQuery('html, body').animate({scrollTop : 0},800);
		 return false;
	});
});