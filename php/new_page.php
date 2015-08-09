<?php
	$title 	= str_replace(" ", "-", strtolower($_POST['page_title']));

	//create directory
	mkdir("../pages/".$title);

	//create new page
	$myfile = fopen("../pages/".$title."/". $title.".php", "w") or die("Unable to open file!");
	$txt = '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../css/normalize.css">
		<link rel="stylesheet" href="../../css/skeleton.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>'.$title.'</title>
	</head>
	<body>
		<div class="container">
			<div class="row twelve columns">
				<h1>'.$title.'</h1>
				<hr />
			</div>
			
			<?php include "../../navigation.php" ; ?>

			<div class="row twelve columns">
				<?php
				foreach (glob("../../modules/'.$title.'/*.html") as $filename)
				{
				    include $filename;
				}
				?>
			</div>
		</div>
	</body>
	</html>
	';
	fwrite($myfile, $txt);
	fclose($myfile);
?>