<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../themes/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Comments</title>
</head>
<body>
<div class="container">
	<?php include_once "view_menu.php"; ?>
	<h1><?php echo $blog[0]->title;?></h1>
	<?php if( count($comments) > 0 ){?>
		<?php foreach ($comments as $comment) {?>
			<blockquote>
				<h4><?php echo $comment->comment ?></h4>
				<footer>
					<p><?php echo $comment->author ?></p>
				</footer>
			</blockquote>
			<hr>  
		<?php }	?>
	<?php } else {
		echo "No Comments";
	} ?></n>

	<a href="<?php echo $this->config->base_url(); ?>index.php/blog/index/<?php echo $blog[0]->blog_category_id; ?>">Back to blogs</a>

	<form method="post" action='<?php echo $this->config->base_url(); ?>index.php/comment/insert_comment' >
	<input type="hidden" name="blog_id" value="<?php echo $blog[0]->id; ?>">
		<p><textarea placeholder="Comments" name="comment"row="10" required></textarea></p>
		<p><input type="text" placeholder="Name" name="author" required /></p>
		<P><input type="submit" value="Submit Comment" /></P>
	</form>
</div>

</body>
</html>