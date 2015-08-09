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
			var confirm = document.getElementById("page-confirm");
			confirm.style.backgroundColor = "#a0d3e8";
			confirm.style.display = "block";
			confirm.innerHTML = 'New page created successfully!<a href="#" id="page-confirm-close">x</a>';
			document.getElementById("page-confirm-close").addEventListener("click", pageCloser);
        	console.log("new page created");
        })
        .fail(function() {
			var confirm = document.getElementById("page-confirm");
			confirm.style.backgroundColor = "#f08a24";
			confirm.style.display = "block";
			confirm.innerHTML = 'Error! New page not created.<a href="#" id="page-confirm-close">x</a>';
			document.getElementById("page-confirm-close").addEventListener("click", pageCloser);
        	console.log("error, page creation failed");
        })
        .always(function() {
        	console.log("module page complete");
        });
		function pageCloser() {
			var confirm = document.getElementById("page-confirm");
			confirm.style.display = "none";
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
			var modconfirm = document.getElementById("module-confirm");
			modconfirm.style.backgroundColor = "#a0d3e8";
			modconfirm.style.display = "block";
			modconfirm.innerHTML = 'New module created successfully!<a href="#" id="module-confirm-close">x</a>';
			document.getElementById("module-confirm-close").addEventListener("click", modCloser);
        	console.log("new module created");
        })
        .fail(function() {
			var modconfirm = document.getElementById("module-confirm");
			modconfirm.style.backgroundColor = "#f08a24";
			modconfirm.style.display = "block";
			modconfirm.innerHTML = 'Error! New module not created.<a href="#" id="module-confirm-close">x</a>';
			document.getElementById("module-confirm-close").addEventListener("click", modCloser);
        	console.log("error, module creation failed");
        })
        .always(function() {
        	console.log("module creation complete");
        });
		function modCloser() {
			var confirm = document.getElementById("module-confirm");
			confirm.style.display = "none";
		}
    });


//end script
});