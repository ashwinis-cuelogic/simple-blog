	
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
<?php } else { ?>
	<p>Welcome Guest</p>
	<ul class="nav nav-pills topnav">
		<li>
			<a href="<?php echo $this->config->base_url(); ?>index.php/login">Login</a>
		</li>
		<li>
			<a href="<?php echo $this->config->base_url(); ?>index.php/category">Blog Categories</a>
		</li>
	</ul>

<?php	}?>
	
	