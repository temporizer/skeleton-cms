jQuery.noConflict();
jQuery(document).ready(function($){

	//sort elements by id
	SortModules = function(parentContainer, moduleElement){
		this.parentContainer = parentContainer;
		this.moduleElement = moduleElement;

			var elems = $(parentContainer).children(moduleElement).remove();
			elems.sort(function(a,b){
		        return (a.id) > (b.id) ? 1 : -1;
		    });
		    $(parentContainer).append(elems);
	};

	modules 	= new SortModules('#module-container', '.skeleton-module');

	//view module positions if '#positions' is in url
	if(document.URL.indexOf('#positions') > -1){
		$('.skeleton-module').each(function(){
			$(this).append('<div class="position">'+$(this).attr('id')+'</div>');
		});

		$('.skeleton-module').css({
			'border' : '1px solid #1EAEDB'
		});
	}

});