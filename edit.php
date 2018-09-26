<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>编辑 | 博客 </title>
</head>
<body>
  <?php        
    require_once'./inc/db.php';

    $id = $_GET['id'];
    $sql = 'select * from posts where id = '.$id;
    $query = mysqli_query($db,$sql);
    $post = mysqli_fetch_object($query);
  ?>

	<h1>编辑博客: <?php echo $post->id ?></h1>

	<form action="update1.php" method="post">		
		<input type="hidden" name="id" value = "<?php echo $post->id ?>"/>
		<label for="title">title</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="body">body</label>
		<textarea name="body">
			<?php echo $post->body ?>
		</textarea>
		<br/>
		<input type="submit" value="提交" />
	</form>

</body>
</html>