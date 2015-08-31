<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Blogs Categories</title>
</head>
<body>
<div class="container">
	<h2>Blog Categories</h2>
	<div class="row">
		<?php foreach ( $blog_categories as $category ) { ?>
			<div class="col-md-4">
				<a href="<?php echo $this->config->base_url(); ?>index.php/blog">
					<p><?php echo $category->category_name ?></p>    
	        		<img src="themes/img/<?php echo $category->image_name ?>" alt="<?php echo $category->description ?>" style="width:100%;height:150px">
				</a>
			</div>
		<?php } ?>
	</div>
</div>
</body>
</html>