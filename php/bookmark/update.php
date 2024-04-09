<?php
$id = $_POST['id'];
$title = $_POST['title'];
$url = $_POST['url'];
$tags = $_POST['tags'];
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
$sql = "UPDATE `urls` SET `title`='$title',`url`='$url',`tags`='$tags' WHERE id=$id";
if ( FALSE === $mysqli->query($sql) ) {
    echo '更新失败'.$mysqli->error;
} else {
    header('location:item.php');
}
$mysqli->close();

