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

	modules 	= new SortModules('#module-container', '.columns');

});