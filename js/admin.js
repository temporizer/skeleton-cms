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

	//create new page
	$('#new_page').on('submit',function(e){
        e.preventDefault();
        $.ajax({
        	url: "php/new_page.php",
        	type: "POST",
        	data: {page_title : $('#page_title').val()},
        })
        .done(function(data) {
			$("#page-confirm").css("background-color", "#a0d3e8");
			$("#page-confirm").css("display", "block");
			$("#page-confirm").html('New page created successfully!<a href="#" id="page-confirm-close">x</a>');
			$("#page-confirm-close").bind("click", pageCloser);
        	console.log("new page created");
			$.ajax({url: "php/pagelist.php", success: function(data){$("#page-list").html(data);}});
        })
        .fail(function() {
			$("#page-confirm").css("background-color", "#f08a24");
			$("#page-confirm").css("display", "block");
			$("#page-confirm").html('Error! New page not created.<a href="#" id="page-confirm-close">x</a>');
			$("#page-confirm-close").bind("click", pageCloser);
        	console.log("error, page creation failed");
        })
        .always(function() {
        	console.log("module page complete");
        });
		function pageCloser() {
			$("#page-confirm").css("display", "none");
		}
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
			$("#module-confirm").css("background-color", "#a0d3e8");
			$("#module-confirm").css("display", "block");
			$("#module-confirm").html('New module created successfully!<a href="#" id="module-confirm-close">x</a>');
			$("#module-confirm-close").bind("click", modCloser);
        	console.log("new module created");
        })
        .fail(function() {
			$("#module-confirm").css("background-color", "#f08a24");
			$("#module-confirm").css("display", "block");
			$("#module-confirm").html('Error! New module not created.<a href="#" id="module-confirm-close">x</a>');
			$("#module-confirm-close").bind("click", modCloser);
        	console.log("error, module creation failed");
        })
        .always(function() {
        	console.log("module creation complete");
        });
		function modCloser() {
			$("#module-confirm").css("display", "none");
		}
    });


//end script
});