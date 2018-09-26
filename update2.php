<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>删除 | 博客 </title>
</head>
<body>

<?php   

    mysql_connect('127.0.0.1','root','root') or die('can`t work');
    mysql_query("SET NAMES utf8");    
    mysql_select_db('blog');

    $id = $_POST['id'];
    $sql = " delete from posts where id = '{$id}' ";

    if(!mysql_query($sql)){
    	echo mysql_errno();
    	echo '<br>' . $sql;
    }else{
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: index.html");
    };

?>
</body>
</html>