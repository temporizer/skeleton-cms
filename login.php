<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div id="login-page">
		<img style="width: 100%; max-width: 300px;" src="skeleton-logo.png" alt="skeleton cms" />
		<?php if(file_exists('user.php')){ ?> 

			<form>
				<input id="username" type="text"  name="username" placeholder="username">
				<input id="password" type="text" name="password" placeholder="password">
				<input id="login" type="submit" name="submit" class="button button-primary"></input>
			</form>

		<?php } else { ?>
			<form id="create_user">
				<input id="create_username" type="text"  name="create_username" placeholder="create username">
				<input id="create_password" type="text" name="create_password" placeholder="create password">
				<input id="new_user" type="submit" name="submit_user" class="button button-primary"></input>
			</form>
		<?php } ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/admin.js" type="text/javascript"></script>
</body>
</html>