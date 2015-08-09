<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/theme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="home">
	<div class="container">
		<div class="row twelve columns">
			<h1>home</h1>
				<hr />
			</div>
		</div>
	</div>
	<div class="container">
		<nav class="row twelve columns">
			<?php include 'navigation.php' ; ?>
		</nav>
	</div>
	<div class="container">
		<div id="module-container" class="row twelve columns">
			<?php
				foreach (glob("modules/index/*.html") as $filename)
				{
				    include $filename;
				}
			?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/module.js"></script>
</body>
</html>