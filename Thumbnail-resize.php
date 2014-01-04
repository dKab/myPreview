<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
require "Thumbnail.php";
$original = $_SERVER["REQUEST_URI"];
$srcPattern = "!.*\\/(\\d+)x(\\d+)\\/(\\w+)\\/(.+)!ui";
$params = array();
preg_match($srcPattern, $original, $params);
$src = $params[4];
$newWidth = $params[1];
$newHeight = $params[2];
$mode = $params[3];
try {
$brandNewPic = Thumbnail::resize($src, $newWidth, $newHeight, $mode);
} catch (Exception $e) {
   echo $e->getTraceAsString();
}
Thumbnail::sendHeader(Thumbnail::$type);
readfile($brandNewPic);