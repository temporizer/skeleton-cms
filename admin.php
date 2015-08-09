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
<div id="admin-tabs" class="container">
	<button data-tab="add-content" class="button button-primary">Create Content</button>
	<button data-tab="documentation" class="button ">Documentation</button>
</div>
<div id="add-content" class="page container">
	<div class="row twelve columns">
		<div class="six columns">
			<h3>Create New Page</h3>
			<div id="page-confirm"></div>
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
				<?php
				$pagepath = glob("pages/*/*.php");
				foreach ($pagepath as $page) {
					$page = basename($page).PHP_EOL;
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
			<ul>
				<?php
				$filelist = glob("modules/*/*.html");
				foreach ($filelist as $file) {
					echo "<li>".$file."</li>";
				}
				?>
			</ul>
		</div>
	</div>

	<div class="row tweleve columns">
			<div class="six columns">
				<h3>Upload Image</h3>
				<hr />
				<form id="new_image" action="php/new_image.php" method="post" enctype="multipart/form-data">
				    Select image to upload:
				    <input type="file" name="fileToUpload" id="fileToUpload">
				    <input class="button button-primary" type="submit" value="Upload Image" name="submit">
				</form>
			</div>
			<div id="current_images" class="six columns">
				<h3>Image Paths</h3>
				<hr />
				<ul>
					<?php
					$imagepath = glob("uploads/*");
					foreach ($imagepath as $image) {
						echo '<a href="' . $image . '"><li class="six columns"> <img src="' . $image . '"/><p>' . $image .'</p></li></a>';
					}
					?>
				</ul>
			</div>
		</div>
</div>

<div id="documentation" class="page container">
	<div class="row tweleve columns">
		<h3>Documentation</h3>
		<hr />
	</div>
	<div class="row tweleve columns">
		<h6><strong>Pages</strong></h6>
		<p>By Defualt the index.php is already created for you, to create new pages simple right the title of the page you want to create and click submit.  To overwrite the module with new content just select the same page, click submit and the content will be replaced.</p>
	</div>

	<div class="row tweleve columns">
		<h6><strong>Modules</strong></h6>
		<p>To create new modules select the page you want the module to display on. If you want to display the module on several pages, just reselect the page and click submit again.</p>
		<p>You can add HTML, CSS and JavaScript to your pages by directly entering it into the "Moduel Content" block.</p>
		<p>If you would like to add images, first upload the image you would like to display, refresh the page, copy the image path and put it into an HTML image tag. See example:</p>
		<ul>
		<li>For index.php - <strong> &lt;img src="images/image_path_name.jpg" alt="image_description" /></strong></li>
		<li>For all other pages - <strong> &lt;img src="../../images/image_path_name.jpg" alt="image_description" /></strong></li>
		</ul>
		<p>Select your column width to dicatate how far the module will span accross screen.</p>
	</div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/admin.js" type="text/javascript"></script>
</body>
</html>















