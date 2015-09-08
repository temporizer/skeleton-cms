jQuery.noConflict();
jQuery(document).ready(function($){

	//if index.php, stop home link from working. 
	$('#home #home-link').on('click touchstart', function(e){
		e.preventDefault();
	});

	//open and close navigation
	$('#mobile-menu-icon').addClass('nav-closed');
	$(document).on('click touchstart', '.nav-closed', function(){
		$('nav').animate({
			'margin-left' : '0px'
		}, 500, function(){
			$('#mobile-menu-icon').removeClass('nav-closed');
			$('#mobile-menu-icon').addClass('nav-open');
		});
	});

	$(document).on('click touchstart', '.nav-open', function(){
		$('nav').animate({
			'margin-left' : '-300px'
		}, 500, function(){
			$('#mobile-menu-icon').addClass('nav-closed');
			$('#mobile-menu-icon').removeClass('nav-open');
		});
	});

	$(window).resize(function() {
		if($(window).width() > 768){
			$('#mobile-menu-icon').addClass('nav-closed');
			$('#mobile-menu-icon').removeClass('nav-open');
			$('nav').css({
				'margin-left' : '0px'
			});
		}

		if($(window).width() < 768){
			$('#mobile-menu-icon').addClass('nav-closed');
			$('#mobile-menu-icon').removeClass('nav-open');
			$('nav').css({
				'margin-left' : '-300px'
			});
		}
	});

});