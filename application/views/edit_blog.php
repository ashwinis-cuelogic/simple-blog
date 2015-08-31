<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/Project/ashwinici/themes/css/custom.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title><?php echo $title;?></title>
</head>
<body>

	<div class="container">
	<?php include_once "view_menu.php";  ?>
	<a href="<?php echo $this->config->base_url(); ?>index.php/blog/index/<?php echo $blog[0]->blog_category_id; ?>">Back to blogs</a>
	<h2>Edit Blog</h2>
	<form method="post" action='<?php echo $this->config->base_url(); ?>index.php/blog/update_blog/<?php echo $blog[0]->id ?>' >
		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>"/>
		<input type="hidden"name="user_id" value="<?php echo $this->session->userdata['userid']; ?>"/>
		<p><input type="text" name="title" value="<?php echo $blog[0]->title;?>" /></p>
		<p><textarea name="body"row="100" cols="30"><?php echo $blog[0]->body;?></textarea></p>
		
		<P>
			<input type="submit" value="Update Blog" /> </t>
			<a href="<?php echo $this->config->base_url(); ?>index.php/blog/index/<?php echo $blog[0]->blog_category_id; ?>">Cancel</a>
		</P>
	</form>
	</div>

</body>
</html>