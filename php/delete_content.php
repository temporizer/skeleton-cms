<?php 
//delete page
$page_path 			= $_POST['remove_page_path'];
$page_directory 	= explode("/", $page_path );
unlink('../'.$page_path ); 
rmdir('../pages'.$page_directory[1]);

//delete module
$module_path 		= $_POST['remove_module_path'];
unlink('../'.$module_path ); 
?>