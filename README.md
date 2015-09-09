# skeleton-cms
Is a flat file cms that uses php write file ability to render HTML, CSS and JS on the fly.  You can upload and delete images, plugins and themes through the plugin manager. This system is built on skeleton css framework and comes pre-installed with font-awesome for icon management. 

##Login
To login you must go to "your-site-name/login.php", if you have not created a user you will be prompted to create one, after you can login and control your site from "your-site-name/admin.php. 

##Pages
By Default the index.php is already created for you, to create new pages simple right the title of the page you want to create and click submit.  To overwrite the module with new content just select the same page, click submit and the content will be replaced.
		
##Modules
To create new modules select the page you want the module to display on. If you want to display the module on several pages, just reselect the page and click submit again.**UPLOAD YOUR IMAGES FIRST BEFORE CREATING YOUR MODULE**

You can add HTML, CSS and JavaScript to your pages by directly entering it into the "Moduel Content" block.</p>
If you would like to add images, first upload the image you would like to display, refresh the page, copy the image path and put it into an HTML image tag. See example:

-For index.php :  `<img src="images/image_path_name.jpg" alt="image_description" />`
-For all other pages : `<img src="../../images/image_path_name.jpg" alt="image_description" />`

Select your column width to dicatate how far the module will span accross screen.

##Delete Content
To delete content copy the file path from the "Remove Content" portion of the admin directory. and paste it into the corresponding filed. Make sure the file path excludes "../", the paths should all start with "pages", "modules", "images".

##Find Module Positions
To find out what order your module is in, go to the page in question containing the modules. At the end of the URL in your browser type "#positions" in and run the URL with '#positions' appended to it. You may have to to ask the browser to accept the modification twice in order to appear.

You should now see the associated numbers border around the modules on the page that you are viewing.

##Plugins And Themes
Plugins and themes are uploaded in the format of HTML, CSS, (JS) JavaScript/jQuery and PHP files. These files are intended to extend the functionality of your site or modify they look of it. HTML and PHP files will not appear in your plugin selection as they are not intended to be primary/ choice uploads to modify your site. 
