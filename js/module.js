jQuery.noConflict();
jQuery(document).ready(function($){

	//if index.php, change href
	$('#home #home-link').on('click touchstart', function(e){
		e.preventDefault();
	});

});