<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div id="admin-title" class="container">
		<h1>Skeleton CMS</h1>
	</div>
<div id="admin-tabs" class="container">
	<button data-tab="add-content" class="button button-primary">Create Content</button>
	<button data-tab="remove-content" class="button">Remove Content</button>
	<button data-tab="upload-images" class="button">Upload Images</button>
	<button data-tab="documentation" class="button">Documentation</button>
</div>
<div id="add-content" class="page container">
	<div class="row twelve columns">
		<div class="six columns">
			<h3>Create New Page</h3>
			<div class="page-confirm"></div>
			<hr />
			<form id="new_page">
				<label>Page Title</label>
				<input id="page_title" name="page_title" type="text"></input><br/>
				<input type="submit" name="submit" class="button button-primary"></input>
			</form>
		</div>

		<div id="current_pages" class="six columns">
			<h3>Current Pages</h3>
			<hr />
			<ul id="page-list">
				<li>index.php "Home/Main Page"</li>
				<?php
					$pagepath = glob("pages/*/*.php");
					foreach ($pagepath as $page) {
						echo "<li>".$page."</li>";
				}
				?>
			</ul>
		</div>
	</div>

	<div class="row twelve columns">
		<div class="six columns">
			<h3>Create New Module</h3>
			<div id="module-confirm"></div>
			<hr />
			<form id="new_module">
				<label>Assign To Page</label>
				<select id="select_page" name="select_page">
					<option vale="index">index</option>
					<?php
						$pagelist = glob("pages/*/*.php");
						foreach ($pagelist as $pages) {
							$pagesSplit = explode("/",$pages);
							echo '<option value="'. $pagesSplit[1] .'">'.$pagesSplit[1].'</option>';
						}
					?>
				</select>
				<label>Page Order</label>
				<input id="order" name="order" type="text"></input>
				<label>Module Title</label>
				<input id="module_title" name="module_title" type="text"></input><br/>
				<label>Module Content</label>
				<textarea id="module_textarea" name="module_textarea" id="" cols="30" rows="10"></textarea><br/>
				<label>Column Width</label>
				<select id="column_width" name="column_width">
					<option value="one columns">one</option>
					<option value="two columns">two</option>
					<option value="three columns">three</option>
					<option value="four columns">four</option>
					<option value="five columns">five</option>
					<option value="six columns">six</option>
					<option value="seven columns">seven</option>
					<option value="eight columns">eight</option>
					<option value="nine columns">nine</option>
					<option value="ten columns">ten</option>
					<option value="eleven columns">eleven</option>
					<option value="twelve columns">tweleve</option>
				</select><br/>
				<input type="submit" name="submit" class="button button-primary"></input>
			</form>
		</div>

		<div id="current_modules" class="six columns">
			<h3>Current Modules</h3>
			<hr />
			<ul class="module-list">
				<?php
				$filelist = glob("modules/*/*.html");
				foreach ($filelist as $file) {
					echo "<li>".$file."</li>";
				}
				?>
			</ul>
		</div>
	</div>
</div>

<div id="remove-content" class="page container">
	<?php @include 'remove-content.php'; ?>
</div>

<div id="upload-images" class="page container">
	<?php @include 'upload-images.php'; ?>
</div>

<div id="documentation" class="page container">
	<?php @include 'documentation.php'; ?>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/admin.js" type="text/javascript"></script>
</body>
</html>















