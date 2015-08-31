<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link rel="stylesheet" href="http://localhost/Project/simple-blog/themes/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Blogs</title>
</head>
<body>
	<div class="container">
		<?php foreach ($blogs as $blog) {?>
			<h1><?php echo $blog->title ?></h1>
			<blockquote>
				<p><?php echo $blog->description ?></p>
				<footer><?php echo $blog->first_name; echo " "; echo $blog->last_name; ?></footer>
			</blockquote>
			<p>
				<a href="<?php echo $this->config->base_url(); ?>index.php/comment/index/<?php echo $blog->id ?>">Comment</a> 
			</p>
			<hr>  
		<?php } ?>
	</div>
</body>
</html>