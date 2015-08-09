<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row twelve columns">
			<h1>Home</h1>
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
		<div class="row twelve columns">
			<?php
				foreach (glob("modules/index/*.html") as $filename)
				{
				    include $filename;
				}
			?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>