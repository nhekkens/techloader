<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tech Loader 9000</title>
    <link rel="stylesheet" type="text/css" href="uploader/style.css">
    <script src="uploader/uploader.js"></script>
    <script src="http://code.jquery.com/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="finder/jquery.columnview.js" type="text/javascript" charset="utf-8"></script>
</head>

<body onload="new uploader('drop', 'status', 'uploader/uploader.php', 'list');">
	<div id="box">
		<div id="status">UPLOAD AREA</div>
                <div id="drop"><img src="uploader/upload2.gif"></div>
		<p>DRAG & DROP</p>
	</div>
	
    
    
    
    
    

<div id="dirlist" style="display:none">    
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "finder/recursivedirsearch.php";
$dir = "FILES";
print_r(makeULLI(readDirR($dir)));
?>
</div>
    <div id="finder">
    </div>        
    
<!--    
 <script type="text/javascript">
      $("div#dirlist > ul:first").clone(true).attr("id", "list1").appendTo("div#finder");
      $("ul#list1").columnview();
</script>
    
    -->
</body>
</html>