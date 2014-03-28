$(window).load(function() {
	$('.flexslider').flexslider({
		animation : "slide",
		slideshow : false
	});

	$('.nav-click').click(function() {
		$('.mobNav,.footer-content > ul').slideToggle();
	});
	$(window).resize(function() {
		if ($(window).width() > 767) {
			$('.mobNav').css('display', 'inline-block');
		} else {
			$('.mobNav').css('display', 'none');
		}
	});
});

$(document).ready(function() {
	$('.search-btn').click(function() {
		$('.search-bar').slideToggle();
	});
});

