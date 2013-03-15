<?php

function readDirR($dir = "../FILES") {
    $listing = opendir($dir);
    $return = array();
    while (($entry = readdir($listing)) !== false) {
        if ($entry != "." && $entry != "..") {
            $dir = preg_replace("/^(.*)(\/)+$/", "$1", $dir);
            $item = $dir . "/" . $entry;
            if (is_file($item)) {
                $return[] = $entry;
            } elseif (is_dir($item)) {
                $return[$entry] = readDirR($item);
            } else {
                
            }
        } else {
            
        }
    }

    return $return;
}

function makeULLI($array) {
    $return = "<ol>\n";

    if (is_array($array) && count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v) && count($v) > 0) {
                $return .= "\t<li>" . $k . makeULLI($v) . "</li>\n";
            } else {
                $return .= "\t<li>" . $v . "</li>\n";
            }
        }
    } else {
        
    }

    $return .= "</ol>";

    return $return;
}

?>