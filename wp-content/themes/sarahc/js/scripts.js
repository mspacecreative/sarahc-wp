$(window).resize(function () {
	if ($(window).width() <= 980) {
		$('nav').height($('.logo').height());
	}
	else {
		$('nav').removeAttr('style');
	}
});

$('.menu-item-has-children').click(function() {
	$(this).children('ul').slideToggle();
	$('body').toggleClass('open');
});

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $('.mobile-nav, #wrapper').toggleClass('is-active');
  });
});