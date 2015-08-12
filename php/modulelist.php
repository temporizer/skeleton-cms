<?php 
$filelist = glob("../modules/*/*.html");
	foreach ($filelist as $file) {
		echo "<li>".$file."</li>";
	}
?>