<?php
	@include 'php/user.php';
?>

<div class="row tweleve columns">
	<div class="six columns">
		<h3>Upload Plugin / Themes</h3>
		<hr />
			<form id="new_plugin" action="php/new_plugin.php" method="post" enctype="multipart/form-data">
				Select plugin / theme to upload:
				<input type="file" name="pluginToUpload" id="pluginToUpload">
				<input class="button button-primary" type="submit" value="Upload plugin / theme" name="submit">
			</form>
	</div>
	<div id="current_plugins" class="six columns">
		<h3>Plugin / Theme Paths</h3>
		<hr />
		<ul id="plugin-list">
		<?php
			$pluginpath = glob("plugins/*");
				foreach ($pluginpath as $plugin) {
					echo '<p class="twelve columns">'. $plugin . '</p>';
				}
		?>
		</ul>
	</div>
</div>