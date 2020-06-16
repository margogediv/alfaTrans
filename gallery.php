<?php
header("Access-Control-Allow-Origin: *");

$files = array();
foreach (glob('img/gallery/*.jpg') as $filename) {
    $p = pathinfo($filename);
    $files[] = $p['filename'];
}
echo json_encode($files);