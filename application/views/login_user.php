<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blogs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/Project/simple-blog/themes/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="login">
		<h1>LOGIN</h1>
		<p class="bg-danger"><?php echo $msg ?></p>
		<form action='<?php echo $this->config->base_url(); ?>/index.php/login/process' method='post' name='process'>
            <label for='username'>Username</label>
	        <input type='text' name='username' id='username' required/><br /><br />
	        <label for='password'>Password</label>
	        <input type='password' name='password' id='password' required/><br /> <br />                        
	        <input type='Submit' value='Login' /><br /><br />      
	    </form>
	</div>
</div>

</body>
</html>