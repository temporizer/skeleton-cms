<?php
	@include 'php/user.php';
?>

<div class="row twelve columns">
	<div class="twelve columns">
		<h3>Remove Content</h3>
		<div class="page-confirm"></div>
		<hr />
		<form id="delete_content">
			<label>Page Path</label>
			<input id="remove_page_path" name="remove_page_path" type="text"></input><br/>
			<label>Module Path</label>
			<input id="remove_module_path" name="remove_module_path" type="text"></input><br/>
			<input type="submit" name="submit" class="button button-danger"></input>
		</form>
	</div>
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

<div id="current_modules" class="six columns">
	<h3>Current Modules</h3>
	<hr />
	<ul id="module-list">
		<?php
			$filelist = glob("modules/*/*.html");
			foreach ($filelist as $file) {
				echo "<li>".$file."</li>";
			}
		?>
	</ul>
</div>
