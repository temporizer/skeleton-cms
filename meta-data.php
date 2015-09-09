<?php include "site_info/site_info.php";?>
<div class="row tweleve columns">
	<div class="twelve columns">
		<h3>Site Data</h3>
		<hr />
			<form id="site_data">
				<strong>Site name:</strong>
				<input type="text" name="site_name" id="site_name" value="<?php echo $site_name; ?>">
				<strong>Site about:</strong>
				<input type="text" name="site_about" id="site_about" value="<?php echo $site_about; ?>">
				<strong>Site keywords:</strong>
				<input type="text" name="site_keywords" id="site_keywords" value="<?php echo $site_keywords; ?>">
				<p>Site logo can be uploaded via the image uploaded, the image name needs to contain the word "logo" before being uploaded. If there is not site logo to be uploaded, it will be replaced by the site name.</p>
				<input class="button button-primary" type="submit" value="Submit Data" name="submit_site_data">
			</form>
	</div>
</div>