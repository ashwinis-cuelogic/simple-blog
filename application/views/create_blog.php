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
	<link rel="stylesheet" href="http://localhost/Project/simple-blog/themes/css/custom.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Blog</title>
</head>
<body>
<div class="container">
	 <div>
	        <?php 
	        if (true == isset($this->session->userdata["first_name"])){ ?>
	            <p>Welcome <?php echo $this->session->userdata["first_name"]; ?>
	                <a href="<?php echo $this->config->base_url(); ?>index.php/login/log_out">Log out</a>
	            </p>
	            <ul class="nav nav-pills topnav">
	                <li>
	                    <a href="<?php echo $this->config->base_url(); ?>index.php/blog/create_blog">Create Blog</a>
	                </li>
	                <li>
	                    <a href="<?php echo $this->config->base_url(); ?>index.php/category">Blog Categories</a>
	                </li>
	                 
	            </ul>
	        <?php } ?>
    </div>
	<div class="blog">
	<br>
	<form method="post" action='<?php echo $this->config->base_url(); ?>index.php/blog/insert_blog' >
		<p>

			<select name="blog_category_id" required> 
			<option value="">Select Blog Category</option>
			<?php foreach ($blog_categories as $blog_category) { ?>
				<option value="<?php echo $blog_category->id;?>"><?php echo $blog_category->category_name;?></option>
			<?php } ?>
			</select>
		</p>
		<p><input placeholder="Title" type="text" name="title" required /></p>
		<p><textarea placeholder="Contents of blog" name="description"row="10" required></textarea></p>
		<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('userid');?>">
		<P><input type="submit" value="Create Blog" /></P>
	</form>
	</div>
</div>
</body>
</html>