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
      <tr>
        <td>1</td>
        <td><a href="show.php?id=1">第一篇博客</a></td>
        <td>2012-10-10  21:07:57</td> 
        <td>
          <a href="edit.php?id=1">改</a>
          <a href="delete.php?id=1">删</a>
        </td> 
      </tr> 
      
      <tr>
        <td>2</td>
        <td><a href="show.php?id=2">第二篇博客</a></td>
        <td>2012-10-11  16:26:21</td> 
        <td>
          <a href="edit.php?id=2">改</a>
          <a href="delete.php?id=2">删</a>
        </td> 
      </tr> 
      
      <tr>
        <td>3</td>
        <td><a href="show.php?id=3">第三篇博客</a></td>
        <td>2012-12-12  19:38:44</td> 
        <td>
          <a href="edit.php?id=3">改</a>
          <a href="delete.php?id=3">删</a>
        </td> 
      </tr> 
      
    </tbody>
  </table>
  <a href="new.html">新增</a>
</body>
</html>