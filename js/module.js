jQuery.noConflict();
jQuery(document).ready(function($){

	//if index.php, stop home link from working. 
	$('#home #home-link').on('click touchstart', function(e){
		e.preventDefault();
	});

});