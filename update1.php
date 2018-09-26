<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>更新 | 博客 </title>
</head>
<body>

<?php   
    require_once'./inc/db.php';
    require_once './inc/common.php';

    $id = $_POST['id'];
    $sql = " update posts set title = '{$_POST["title"]}',body= '{$_POST["body"]}' where id = '{$id}' ";

    if(!mysqli_query($db,$sql)){
    	echo mysqli_error($db);
    	echo '<br>' . $sql;
    }else{
        redirect_to("./show.php?id={$id}");
    };

?>
</body>
</html>