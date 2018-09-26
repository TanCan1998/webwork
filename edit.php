<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>编辑 | 博客 </title>
</head>
<body>
  <?php        
    mysql_connect('127.0.0.1','root','root') or die('can`t work');
    mysql_query("SET NAMES utf8");    
    mysql_select_db('blog');

    $id = $_GET['id'];
    $sql = 'select * from posts where id = '.$id;
    $query = mysql_query($sql);
    $post = mysql_fetch_object($query);
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