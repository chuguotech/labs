<?php
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
