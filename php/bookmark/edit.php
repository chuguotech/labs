<?php
$id = $_GET['id'];
$mysqli = new mysqli('localhost', 'bkmk', 'Fcpm7XheQXA7f9Ov', 'bookmarks');
if ( $mysqli -> connect_errno ) {
    echo '连接MySQL失败';
    exit();
}
$sql = "SELECT `id`, `title`, `url`, `tags`, `inserted_at`, `updated_at` FROM `urls` WHERE id=$id limit 1";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
<style>
input{height:30px;width:400px;}
</style>
  <body>
        <h1>编辑书签</h1>

        <form action="update.php" method=post>

        <p><input type=text  name=title value='<?php echo $row['title'];?>' placeholder='标题' required /></p>

        <p><input type=text name=url value='<?php echo $row['url'];?>' placeholder='地址' required /></p>

            <p><input type=text name=tags value='<?php echo $row['tags'];?>' placeholder='标签' /></p>

            <p><input type=hidden name=id value='<?php echo $row['id'];?>' /></p>

            <p><button>修改</button></p>

        </form>

  </body>
</html>
