<?php
	
	$js = $_POST['js_canvas'];

	$myfile = fopen("../js/custom.js", "w") or die("Unable to open file!");
	$txt = $js;
	fwrite($myfile, $txt);
	fclose($myfile);
?>