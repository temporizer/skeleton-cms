<ul>
	<li id="home-link"><a href="../../index.php" title="home">home</a></li>
	<?php
		//for index page
		$pagelist = glob("pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'. $pages .'" title="'. $pages .'">'. str_replace("-", " ",$pagesSplit[1]) .'</a></li>';
			}

		//for every other page
		$pagelist = glob("../../pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'. $pages .'" title="'. $pages .'">'. str_replace("-", " ",$pagesSplit[3]) .'</a></li>';
			}
	?>
</ul>