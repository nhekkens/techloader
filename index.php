<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tech Loader 9000</title>
    <link rel="stylesheet" type="text/css" href="uploader/style.css">
	<script src="uploader/uploader.js"></script>
</head>

<body onload="new uploader('drop', 'status', 'uploader/uploader.php', 'list');">
	<div id="box">
		<div id="status">UPLOAD AREA</div>
                <div id="drop"><img src="uploader/upload.gif"></div>
		<p>DRAG & DROP</p>
	</div>
	<div id="list"></div>

            
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include "finder/recursivedirsearch.php";
$dir = "FILES";
print_r(makeULLI(readDirR($dir)));

//test('WHYYY');
?>
 
</body>
</html>