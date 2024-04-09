<?php
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
$page = max(1, intval($_GET['page']));

$sql = "SELECT count(*) as total FROM `urls`";
$result = $mysqli->query($sql);
$total = $result->fetch_row()[0];
$page_rows = 25;
$total_pages = ceil($total/$page_rows);
$sql = "SELECT `id`, `title`, `url`, `tags`, `inserted_at`, `updated_at` FROM `urls` 
        where id> ($page-1)*$page_rows order by id ASC limit $page_rows";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<style>
.pagination span {margin:20px;}
</style>
</head>
<body>
<h1>书签列表</h1>
<table border="1" cellpadding="1">
<tbody>
<tr>
<td>id</td>
<td>标题</td>
<td>url</td>
<td>标签</td>
<td>添加时间</td>
<td>修改</td>
<td>删除</td>
</tr>

<?php
$result = $mysqli->query($sql);
while ( $row = $result->fetch_assoc() ) {
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['title'].'</td>';
    echo '<td>'.$row['url'].'</td>';
    echo '<td>'.$row['tags'].'</td>';
    echo '<td>'.$row['inserted_at'].'</td>';
    echo '<td><a href=edit.php?id='.$row['id'].' target=_self>修改</a></td>';
    echo '<td><a href=del.php?id='.$row['id'].' target=_self>删除</a></td>';
    echo '</tr>';
}
$result->free();
?>

</tbody>
</table>
<p class=pagination>
<?php
$show_page = 1;
while($show_page<=$total_pages) {
    echo '<span><a href=item.php?page='.$show_page.' target=_self>'.$show_page.'</a></span>';
    $show_page++;
}
?>
</p>
</body>
</html>
<?php
$mysqli->close();
?>
