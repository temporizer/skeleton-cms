jQuery.noConflict();
jQuery(document).ready(function($){

    //admin menu
    $(document).on('click', '.admin-closed', function(){
        $('#admin-tabs').animate({
            'height' : '300px'},
            500, function() {
            $('#content-menu').removeClass('admin-closed');
            $('#content-menu').addClass('admin-open');
        });
    });

    $(document).on('click', '.admin-open', function(){
        $('#admin-tabs').animate({
            'height' : '0px'},
            500, function() {
            $('#content-menu').removeClass('admin-open');
            $('#content-menu').addClass('admin-closed');
        });
    });

    $(window).resize(function() {
        if($(window).width() > 768){
            $('#admin-tabs').css({
                'height' : 'auto' 
            });

            $('#content-menu').removeClass('admin-open');
            $('#content-menu').addClass('admin-closed');
        }

        if($(window).width() < 768){
            $('#admin-tabs').css({
                'height' : '0px' 
            });

            $('#content-menu').removeClass('admin-open');
            $('#content-menu').addClass('admin-closed');
        }
    });

    //hide errors when no user exists
    $('br, b').wrapAll('<div class="error"></div>');

    //login
    //create new user file
    $('#create_user').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "php/create_user.php",
            type: "POST",
            data: {create_username : $.md5($('#create_username').val()), create_password : $.md5($('#create_password').val())},
        })
        .done(function(data) {
            console.log($('#create_password').val());
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
        document.cookie="username="+$.md5($('#username').val());
        document.cookie="password="+$.md5($('#password').val());
        window.location = "admin.php";
    });

	//change tabs
	$('#admin-tabs button').on('click', function(){
		$(this).addClass('button-primary');
		$(this).siblings('button').removeClass('button-primary');

		$('#'+$(this).attr('data-tab')).fadeIn(100, function() {
			$(this).siblings('.page').fadeOut(100);
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
			$("#add-content .page-confirm").css("background-color", "#a0d3e8");
			$("#add-content .page-confirm").css("display", "block");
			$("#add-content .page-confirm").html('New page created successfully!<a href="#" class="page-confirm-close">x</a>');
			$("#add-content .page-confirm-close").bind("click", pageCloser);
        	console.log("new page created");
        	//refresh page list
			$.ajax({url: "php/pagelist.php", success: function(data){$("#page-list").html(data);}});
        })
        .fail(function() {
			$("#add-content .page-confirm").css("background-color", "#f08a24");
			$("#add-content .page-confirm").css("display", "block");
			$("#add-content .page-confirm").html('Error! New page not created.<a href="#" class="page-confirm-close">x</a>');
			$("#add-content .page-confirm-close").bind("click", pageCloser);
        	console.log("error, page creation failed");
        })
        .always(function() {
        	console.log("module page complete");
        });
		function pageCloser() {
			$("#add-content .page-confirm").css("display", "none");
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

    //custom css
    $('#custom-css').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "php/custom-css.php",
            type: "POST",
            data: {css_canvas : $('#css_canvas').val()},
        })
        .done(function(data) {
            $("#custom .page-confirm").css("background-color", "#a0d3e8");
            $("#custom .page-confirm").css("display", "block");
            $("#custom .page-confirm").html('CSS updated successfully!<a href="#" class="page-confirm-close">x</a>');
            $("#custom .page-confirm-close").bind("click", pageCloser);
            console.log("css updating");
        })
        .fail(function() {
            $("#custom .page-confirm").css("background-color", "#f08a24");
            $("#custom .page-confirm").css("display", "block");
            $("#custom .page-confirm").html('Error! CSS not deleted.<a href="#" class="page-confirm-close">x</a>');
            $("#custom .page-confirm-close").bind("click", pageCloser);
            console.log("error, updating css");
        })
        .always(function() {
            console.log("css updated");
        });
        function pageCloser() {
            $("#custom  .page-confirm").css("display", "none");
        }
    });

    //custom css
    $('#custom-js').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "php/custom-js.php",
            type: "POST",
            data: {js_canvas : $('#js_canvas').val()},
        })
        .done(function(data) {
            $("#custom .page-confirm").css("background-color", "#a0d3e8");
            $("#custom .page-confirm").css("display", "block");
            $("#custom .page-confirm").html('JS updated successfully!<a href="#" class="page-confirm-close">x</a>');
            $("#custom .page-confirm-close").bind("click", pageCloser);
            console.log("js updating");
        })
        .fail(function() {
            $("#custom .page-confirm").css("background-color", "#f08a24");
            $("#custom .page-confirm").css("display", "block");
            $("#custom .page-confirm").html('Error! JS not deleted.<a href="#" class="page-confirm-close">x</a>');
            $("#custom .page-confirm-close").bind("click", pageCloser);
            console.log("error, updating js");
        })
        .always(function() {
            console.log("js updated");
        });
        function pageCloser() {
            $("#custom  .page-confirm").css("display", "none");
        }
    });

    $('#site_data').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "php/meta_data.php",
            type: "POST",
            data: {site_name : $('#site_name').val(), site_about : $('#site_about').val(), site_keywords : $('#site_keywords').val()},
        })
        .done(function(data) {
            $("#meta-data .page-confirm").css("background-color", "#a0d3e8");
            $("#meta-data .page-confirm").css("display", "block");
            $("#meta-data .page-confirm").html('Site meta data updated!<a href="#" class="page-confirm-close">x</a>');
            $("#meta-data .page-confirm-close").bind("click", pageCloser);
            console.log("updating site info");
        })
        .fail(function() {
            $("#meta-data .page-confirm").css("background-color", "#f08a24");
            $("#meta-data .page-confirm").css("display", "block");
            $("#meta-data .page-confirm").html('Error! meta data not updated.<a href="#" class="page-confirm-close">x</a>');
            $("#meta-data .page-confirm-close").bind("click", pageCloser);
            console.log("error, updating site info");
        })
        .always(function() {
            console.log("site info updated");
        });
        function pageCloser() {
            $("#meta-data  .page-confirm").css("display", "none");
        }
    });

//end script
});