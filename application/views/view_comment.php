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
	<h1><?php echo $blog[0]->title;?></h1>
	<?php if( count($comments) > 0 ){?>
		<?php foreach ($comments as $comment) {?>
			<blockquote>
				<h3><?php echo $comment->body ?></h3>
				<footer>
					<p><?php echo $comment->author ?></p>
				</footer>
			</blockquote>
			<hr>  
		<?php }	?>
	<?php } else {
		echo "No Comments";
	} ?></n>
</div>
</body>
</html>