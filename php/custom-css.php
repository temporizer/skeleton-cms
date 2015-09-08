<?php
	
	$css = $_POST['css_canvas'];

	$myfile = fopen("../css/custom.css", "w") or die("Unable to open file!");
	$txt = $css;
	fwrite($myfile, $txt);
	fclose($myfile);
?>