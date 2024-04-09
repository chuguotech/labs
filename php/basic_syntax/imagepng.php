<?php
require_once('without_end_tag.php');
header('Content-Type:image/png');
$image = imagecreatetruecolor(200,200);
$color = imagecolorallocate($image,14,48,196);
imagefill($image,0,0,$color);
imagepng($image);
