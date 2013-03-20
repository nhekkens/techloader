<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tech Loader 9000</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jqueryFileTree.css">
    <script src="uploader/uploader.js"></script>
    <script src="http://code.jquery.com/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="finder/jqueryFileTree.js" type="text/javascript" charset="utf-8"></script>
</head>

<body onload="new uploader('drop', 'status', 'uploader/uploader.php', 'list');">

<?php
/*
Our php.ini contains the following settings:

display_errors = On
register_globals = Off
post_max_size = 8M
*/

echo 'display_errors = ' . ini_get('display_errors') . "\n";
echo 'register_globals = ' . ini_get('register_globals') . "\n";
echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

?>
	
    
    <div id="box">
        <div id="status">UPLOAD AREA</div>
        <div id="drop"><img src="uploader/upload2.gif"></div>
        <p>DRAG & DROP</p>
    </div>
 
<div id="finder">
     <script>
    $(document).ready( function() {
    $('#finder').fileTree({ 
        root: 'FILES/' }, 
        function(file) {
        alert(file);
        });
    });   
    </script>
</<div>        

    
    
   
</body>
</html>