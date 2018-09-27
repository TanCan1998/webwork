<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>删除 | 博客</title>
</head>
<body>	
<?php        
    require_once'./inc/db.php';

    $id = $_GET['id'];
    $sql = 'select * from posts where id = '.$id;
    $query = mysqli_query($db,$sql);
    $post = mysqli_fetch_object($query);
  ?>

	<form action="update2.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $post->id ?>"/>
		是否删除ID为<?php echo $post->id ?>的帖子?
		<input type="submit" value="确定">
	</form>	
</body>
</html>