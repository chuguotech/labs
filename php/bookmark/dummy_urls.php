<?php
require('mysql.php');
$file = new SplFileObject("words.txt");
while (!$file->eof()) {
    $title = trim($file->fgets());
    if ( $title ) {
        $url = sprintf('https://www.%s.com', $title);
        $tags = chr(mt_rand(97,122));
        $inserted_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `urls`(`title`, `url`, `tags`, `inserted_at`) VALUES ('$title','$url','$tags','$inserted_at')";
        $mysqli->query($sql);
    }
}
echo 'insert dummy url complete';
