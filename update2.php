<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>删除 | 博客 </title>
</head>
<body>

<?php   
    require_once'./inc/db.php';
    require_once './inc/common.php';

    $id = $_POST['id'];
    $sql = " delete from posts where id = '{$id}' ";

    if(!mysqli_query($db,$sql)){
        echo mysqli_error($db);
        echo '<br>' . $sql;
    }else{
        redirect_to("./index.php");
    };

?>
</body>
</html>