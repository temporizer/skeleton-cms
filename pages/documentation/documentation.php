
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<?php include '../../site_info/site_info.php' ?>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../css/normalize.css">
		<link rel="stylesheet" href="../../css/skeleton.css">
		<link rel="stylesheet" href="../../css/theme.css">
		<link rel="stylesheet" href="../../plugins/font-awesome.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="description" content="<?php echo $site_about; ?>">
		<meta name="keywords" content="<?php echo $site_keywords; ?>">
		<title><?php echo $site_name; ?> documentation</title>
	</head>
	<body>
		<i id="mobile-menu-icon" class="fa fa-bars"></i>
		<div class="container">
			<div id="logo">
				<?php
					foreach (glob("../../uploads/*") as $logo)
					{
						if (strpos($logo,'logo') !== false) {
						    echo '<img src="'. $logo . '">';
						}
					}
				?>
			</div>			
			<nav>
				<?php include "../../navigation.php" ; ?>
			</nav>

			<div class="row twelve columns">
				<hr />
			</div>

			<div id="module-container" class="row twelve columns">
				<?php
				foreach (glob("../../modules/documentation/*.html") as $filename)
				{
				    include $filename;
				}
				?>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/navigation.js"></script>
		<script type="text/javascript" src="../../js/module.js"></script>
	</body>
	</html>
	