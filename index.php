<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 我的博客</title>
</head>

<body>
  <table border=1>
    <caption><h1>博客列表</h1></caption>
    <thead>
      <tr>
        <th>id</th>
        <th>标题</th>
        <th>创建日期</th>
        <th>操作</th>        
      </tr>
    </thead>
    <tbody>
      <?php
        $posts = Array(
            Array('id'=>'1','title'=>'第1篇帖子','created_at'=>'2012-1-1  21:01:57'),
            Array('id'=>'2','title'=>'第2篇帖子','created_at'=>'2012-1-1  21:01:57'),
            Array('id'=>'3','title'=>'第3篇帖子','created_at'=>'2012-1-1  21:01:57'),
        );
        foreach ($posts as $post) {
      ?>
          <tr>
            <td><?php echo $post['id'] ?></td>
            <td><a href="show.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></td>
            <td>2012-10-11  16:26:21</td> 
            <td>
              <a href="edit.php?id=<?php echo $post['id'] ?>">改</a>
              <a href="delete.php?id=<?php echo $post['id'] ?>">删</a>
            </td> 
          </tr> 
        <?php } ?>
      
    </tbody>
  </table>
  <a href="new.html">新增</a>
</body>
</html>
