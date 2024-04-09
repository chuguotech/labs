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
        <h1>添加书签</h1>

        <form action="insert.php" method=post>

            <p><input type=text  name=title value='' placeholder='标题' required /></p>

            <p><input type=text name=url value='' placeholder='地址' required /></p>

            <p><input type=text name=tags value='' placeholder='标签' /></p>

            <p><button>添加</button></p>

        </form>

  </body>
</html>
