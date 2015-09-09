<?php
	
	$site_name 		= $_POST['site_name'];
	$site_about 	= $_POST['site_about'];
	$site_keywords 	= $_POST['site_keywords'];

	$myfile = fopen("../site_info/site_info.php", "w") or die("Unable to open file!");
	$txt = '<?php $site_name="' . $site_name . '"; $site_about="'. $site_about. '"; $site_keywords="'. $site_keywords. '"; ?>';
	fwrite($myfile, $txt);
	fclose($myfile);
?>