<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plugin Upload</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body id="plugin-upload">
<div class="container">

<?php
$target_dir = "../plugins/";
$target_file = $target_dir . basename($_FILES["pluginToUpload"]["name"]);
$uploadOk = 1;
$pluginFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/

// Allow certain file formats
if($pluginFileType != "html" && $pluginFileType != "css" && $pluginFileType != "js"
&& $pluginFileType != "php" ) {
    //echo "Sorry, only html, css, js & php files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pluginToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
?>

<div class='loading'>
<h2>Uploading Plugin</h2>
  <div class='bullet'></div>
  <div class='bullet'></div>
  <div class='bullet'></div>
  <div class='bullet'></div>
</div>

<script>
setTimeout(function(){
window.history.go(-1);
}, 3000);
</script>

</div>
</body>
</html>