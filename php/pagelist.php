<?php
				$pagepath = glob("../pages/*/*.php");
				foreach ($pagepath as $page) {
					$page = basename($page).PHP_EOL;
					echo "<li>".$page."</li>";
				}
				?>