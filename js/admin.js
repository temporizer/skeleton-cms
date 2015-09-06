jQuery.noConflict();
jQuery(document).ready(function($){

    //login
    //create new user file
    $('#create_user').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "php/create_user.php",
            type: "POST",
            data: {create_username : $('#create_username').val(), create_password : btoa($('#create_password').val())},
        })
        .done(function(data) {
            console.log("user created");
            location.reload();
        })
        .fail(function() {
            console.log("error, user creation failed");
        })
        .always(function() {
            console.log("user creation complete");
        });
    });

    //if user file exists
    $('#login').on('click touchstart', function(e){
        e.preventDefault(); 
        console.log($('#username').val()+" "+$('#password').val());
        document.cookie="username"+"="+$('#username').val();
        document.cookie="password"+"="+btoa($('#password').val());
        window.location = "admin.php";
    });

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
			$(".page-confirm").css("background-color", "#a0d3e8");
			$(".page-confirm").css("display", "block");
			$(".page-confirm").html('New page created successfully!<a href="#" class="page-confirm-close">x</a>');
			$(".page-confirm-close").bind("click", pageCloser);
        	console.log("new page created");
        	//refresh page list
			$.ajax({url: "php/pagelist.php", success: function(data){$("#page-list").html(data);}});
        })
        .fail(function() {
			$(".page-confirm").css("background-color", "#f08a24");
			$(".page-confirm").css("display", "block");
			$(".page-confirm").html('Error! New page not created.<a href="#" class="page-confirm-close">x</a>');
			$(".page-confirm-close").bind("click", pageCloser);
        	console.log("error, page creation failed");
        })
        .always(function() {
        	console.log("module page complete");
        });
		function pageCloser() {
			$(".page-confirm").css("display", "none");
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
        	//refresh module list
        	$.ajax({url: "php/modulelist.php", success: function(data){$("#module-list").html(data);}});
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

	//delete content
	$('#delete_content').on('submit',function(e){
        e.preventDefault();
        $.ajax({
        	url: "php/delete_content.php",
        	type: "POST",
        	data: {remove_page_path : $('#remove_page_path').val(), remove_module_path : $('#remove_module_path').val()},
        })
        .done(function(data) {
			$("#delete_content .page-confirm").css("background-color", "#a0d3e8");
			$("#delete_content .page-confirm").css("display", "block");
			$("#delete_content .page-confirm").html('Content deleted successfully!<a href="#" class="page-confirm-close">x</a>');
			$("#delete_content .page-confirm-close").bind("click", pageCloser);
        	console.log("content deleted");
        	//refresh page & module list
			$.ajax({url: "php/pagelist.php", success: function(data){$(".page-list").html(data);}});
			$.ajax({url: "php/modulelist.php", success: function(data){$(".module-list").html(data);}});
        })
        .fail(function() {
			$("#delete_content .page-confirm").css("background-color", "#f08a24");
			$("#delete_content .page-confirm").css("display", "block");
			$("#delete_content .page-confirm").html('Error! Content not deleted.<a href="#" class="page-confirm-close">x</a>');
			$("#delete_content .page-confirm-close").bind("click", pageCloser);
        	console.log("error, deleting content");
        })
        .always(function() {
        	console.log("deletion complete");
        });
		function pageCloser() {
			$("#delete_content  .page-confirm").css("display", "none");
		}
    });



//end script
});