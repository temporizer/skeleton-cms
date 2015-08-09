jQuery.noConflict();
jQuery(document).ready(function($){

	//change tabs
	$('#admin-tabs button').on('click', function(){
		$(this).addClass('button-primary');
		$(this).siblings('button').removeClass('button-primary');

		$('#'+$(this).attr('data-tab')).fadeIn('fast', function() {
			$(this).siblings('.page').fadeOut('fast');
		});
	});

	console.log($('#admin-tabs button').attr('data-tab'));

	//create new page
	$('#new_page').on('submit',function(e){
        e.preventDefault();
        $.ajax({
        	url: "php/new_page.php",
        	type: "POST",
        	data: {page_title : $('#page_title').val()},
        })
        .done(function(data) {
        	console.log("new page created");
        })
        .fail(function() {
        	console.log("error, page creation failed");
        })
        .always(function() {
        	console.log("module page complete");
        });  
    });

	//create new module
	$('#new_module').on('submit',function(e){
        e.preventDefault();
        $.ajax({
        	url: "php/new_module.php",
        	type: "POST",
        	data: {select_page : $('#select_page').val(), order : $('#order').val(), module_title : $('#module_title').val(), module_textarea : $('#module_textarea').val(), column_width : $('#column_width').val()},
        })
        .done(function(data) {
        	console.log("new module created");
        })
        .fail(function() {
        	console.log("error, module creation failed");
        })
        .always(function() {
        	console.log("module creation complete");
        });  
    });


//end script
});