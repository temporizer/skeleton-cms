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
		<ul id="image-list">
		<?php
			$imagepath = glob("uploads/*");
			foreach ($imagepath as $image) {
				echo '<a href="' . $image . '"><li class="six columns"> <img src="' . $image . '"/><p>' . $image .'</p></li></a>';
			}
		?>
		</ul>
	</div>
</div>