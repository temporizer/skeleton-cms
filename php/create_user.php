<?php
	$create_username = $_POST['create_username'];
	$create_password = $_POST['create_password'];

	//create module
	$myfile = fopen("../user.php", "w") or die("Unable to open file!");
	$txt = '<?php $username="' . $create_username . '"; $password="'. $create_password. '"; ?>';
	fwrite($myfile, $txt);
	fclose($myfile);
?>	