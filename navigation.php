<ul>
	<li id="home-link"><a href="../../index.php" title="home">home</a></li>
	<?php
		//for index page
		$pagelist = glob("pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'.$pagesSplit[1].'.php" title="'. $pages .'">'. $pagesSplit[1] .'</a></li>';
			}

		//for every other page
		$pagelist = glob("../../pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'. $pagesSplit[1] .'.php" title="'. $pages .'">'. $pagesSplit[3] .'</a></li>';
			}
	?>
</ul>