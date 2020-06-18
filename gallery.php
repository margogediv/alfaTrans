<?php
header("Access-Control-Allow-Origin: *");

$files = array();
foreach (glob('img/gallery/*.*') as $filename)
    $files[] = $filename;

echo json_encode($files);