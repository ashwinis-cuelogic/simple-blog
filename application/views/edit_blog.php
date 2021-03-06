<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/Project/simple-blog/themes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/Project/simple-blog/themes/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
                if (true == isset($this->session->userdata["first_name"])){ ?>
                    <p>Welcome <?php echo $this->session->userdata["first_name"]; ?>
                        <a href="<?php echo $this->config->base_url(); ?>index.php/login/log_out">Log out</a>
                    </p>
                    <ul class="nav navbar-nav navbar-right">
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
                        <li>
                         <a href="<?php echo $this->config->base_url(); ?>index.php/blog/index/<?php echo $blog[0]->blog_category_id; ?>">Blogs</a>
                        </li>
                    </ul>

                <?php   }?>
             </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('http://localhost/Project/simple-blog/themes/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Edit a blog</h1>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
           <form method="post" action='<?php echo $this->config->base_url(); ?>index.php/blog/update_blog/<?php echo $blog[0]->id ?>' >
				<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>"/>
				<input type="hidden"name="user_id" value="<?php echo $this->session->userdata['userid']; ?>"/>
				<p><input type="text" name="title" value="<?php echo $blog[0]->title;?>" /></p>
				<p><textarea name="description"row="100" cols="30"><?php echo $blog[0]->description;?></textarea></p>
				
				<P>
					<input type="submit" value="Update Blog" /> </t>
					<a href="<?php echo $this->config->base_url(); ?>index.php/blog/index/<?php echo $blog[0]->blog_category_id; ?>">Cancel</a>
				</P>
		</form>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="http://localhost/Project/simple-blog/themes/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/Project/simple-blog/themes/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript 
    <script src="http://localhost/Project/simple-blog/themes/js/clean-blog.min.js"></script>
-->
</body>

</html>
