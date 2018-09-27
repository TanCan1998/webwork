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

        require_once'./inc/db.php';
        $result = mysqli_query($db,"select * from posts");
        while($row=mysqli_fetch_row($result)) {
      ?>
          <tr>
            <td><?php echo $row[0] ?></td>
            <td><a href="show.php?id=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></td>
            <td>2012-10-11  16:26:21</td> 
            <td>
              <a href="edit.php?id=<?php echo $row[0] ?>">改</a>
              <a href="delete.php?id=<?php echo $row[0] ?>">删</a>
            </td> 
          </tr> 
        <?php } ?>
      
    </tbody>
  </table>
  <a href="new.html">新增</a>
</body>
</html>
