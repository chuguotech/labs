<?php
$id = $_GET['id'];
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
$sql = "DELETE FROM `urls` WHERE id=$id";
if ( FALSE === $mysqli->query($sql) ) {
    echo '删除失败'.$mysqli->error;
} else {
    header('location:item.php');
}
$mysqli->close();

