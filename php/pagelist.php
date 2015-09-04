<li>index.php "Home/Main Page"</li>
<?php
	@include 'user.php';
	
	$pagepath = glob("../pages/*/*.php");
	foreach ($pagepath as $page) {
		echo "<li>".$page."</li>";
	}

?>