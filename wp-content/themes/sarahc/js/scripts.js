$(window).resize(function () {
	if ($(window).width() <= 980) {
		$('nav').height($('.logo').height());
	}
	else {
		$('nav').removeAttr('style');
	}
});

$('.menu-item-has-children').click(function(e) {
	$(this).children('ul').slideToggle();
	$('body').toggleClass('open');
});

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $('.mobile-nav, #wrapper').toggleClass('is-active');
  });
  
  $('a').each( function() {
  	var nav = $(this); 
  	if( nav.length > 0 ) {
  		if( nav.attr('href') == '#' ) {
  			//console.log(nav);
  			$(this).click(
  				function(e) {
  					e.preventDefault();
  				}
  			);
  		}
  	}
  });
  
  if ( $.trim( $('.half.prev-link').text() ).length == 0 ) {
      $('.half.prev-link').hide();
      $('.half.prev-link').next().css({'text-align' : 'right', 'width' : '100%'});
  }
  
});