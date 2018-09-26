<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>新增 | 博客 </title>
</head>
<body>

<?php   

    require_once'./inc/db.php';
    require_once './inc/common.php';

    $sql = "INSERT INTO posts (title, body)VALUES('$_POST[title]','$_POST[body]')";

    if(!mysqli_query($db,$sql)){
        echo mysqli_error($db);
        echo '<br>' . $sql;
    }else{
        redirect_to("./");
    };

?>
</body>
</html>