<?php
$title = $_POST['title'];
$url = $_POST['url'];
$tags = $_POST['tags'];
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
$inserted_at = date('Y-m-d H:i:s');
$sql = "INSERT INTO `urls`(`title`, `url`, `tags`, `inserted_at`) VALUES 
                          ('$title','$url','$tags','$inserted_at')";
$mysqli->query($sql);
if ( $mysqli->error ) {
    echo '添加失败'.$mysqli->error;
} else {
    header('location:item.php');
}

