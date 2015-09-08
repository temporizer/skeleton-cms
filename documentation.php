<?php
	@include 'php/user.php';
?>

<div class="row tweleve columns">
	<h3>Documentation</h3>
	<hr />
</div>

<div class="row tweleve columns">
	<h6><strong>Login</strong></h6>
	<p>To login you must go to <strong>"your-site-name/login.php"</strong>, if you have not created a user you will be prompted to create one, after you can login and control your site from <strong>"your-site-name/admin.php</strong></p>
</div>

<div class="row tweleve columns">
	<h6><strong>Pages</strong></h6>
	<p>By Default the index.php is already created for you, to create new pages simple right the title of the page you want to create and click submit.  To overwrite the module with new content just select the same page, click submit and the content will be replaced.</p>
</div>

<div class="row tweleve columns">
	<h6><strong>Modules</strong></h6>
	<p>To create new modules select the page you want the module to display on. If you want to display the module on several pages, just reselect the page and click submit again.</p>
	<p>You can add HTML, CSS and JavaScript to your pages by directly entering it into the "Module Content" block.</p>
	<p>If you would like to add images, first upload the image you would like to display, refresh the page, copy the image path and put it into an HTML image tag. See example:</p>
	<ul>
	<li>For index.php - <strong> &lt;img src="images/image_path_name.jpg" alt="image_description" /></strong></li>
	<li>For all other pages - <strong> &lt;img src="../../images/image_path_name.jpg" alt="image_description" /></strong></li>
	</ul>
	<p>Select your column width to dictate how far the module will span across screen.</p>
</div>

<div class="row tweleve columns">
	<h6><strong>Locating Modules</strong></h6>
	<p>To find out what order your module is in, go to the page in question containing the modules. At the end of the URL in your browser type "#positions" in and run the URL with '#positions' appended to it. You may have to to ask the browser to accept the modification twice in order to appear.</p>

	<p>You should now see the associated numbers border around the modules on the page that you are viewing.</p>
</div>

<div class="row tweleve columns">
	<h6><strong>Plugins /  Themes</strong></h6>
	<p>Plugins and themes are uploaded in the format of HTML, CSS, (JS) JavaScript/jQuery and PHP files. These files are intended to extend the functionality of your site or modify they look of it. HTML and PHP files will not appear in your plugin selection as they are not intended to be primary/ choice uploads to modify your site. </p>
</div>

<div class="row tweleve columns">
	<h6><strong>Remove Content</strong></h6>
	<p>To delete content copy the file path from the "Remove Content" portion of the admin directory. and paste it into the corresponding filed. Make sure the file path excludes "../", the paths should all start with "pages", "modules", "images".</p>
</div>