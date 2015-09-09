<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Skeleton CMS Login</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div id="login-page">
		<img style="width: 100%; max-width: 300px;" src="skeleton-logo.png" alt="skeleton cms" />
		<br />
		<?php if(file_exists('user.php')){ ?> 

			<form>
				<input id="username" type="text"  name="username" placeholder="username">
				<input id="password" type="password" name="password" placeholder="password">
				<input id="login" type="submit" name="submit" class="button button-primary"></input>
			</form>

		<?php } else { ?>
			<form id="create_user">
				<input id="create_username" type="text"  name="create_username" placeholder="create username">
				<input id="create_password" type="password" name="create_password" placeholder="create password">
				<input id="new_user" type="submit" name="submit_user" class="button button-primary"></input>
			</form>
		<?php } ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.md5.min.js"></script>
	<script src="js/admin.js" type="text/javascript"></script>
</body>
</html>