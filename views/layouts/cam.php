<!DOCTYPE html>
<html lang="">
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $template['title'];?> | CAM - Designs</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" type="imgs/x-icon" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<?php echo $template['metadata']; ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css?version=1" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/styles.css?version=1" />
	<!-- JavaScript -->
	<!--[if IE]><![endif]-->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/respond.min.js"></script>
</head>
	<body>
		<nav>
			<ul>
				<li><?php echo anchor('login', 'Login', 'title="Login"');?></li>
				<li><?php echo anchor('login/logout', 'logout', 'title="logout"');?></li>
				<li><?php echo anchor('frontend', 'frontend', 'title="frontend"');?></li>
				<li><?php echo anchor('admin', 'admin', 'title="admin"');?></li>
			</ul>
		</nav>
		 <?php echo $template['body']; // this adds the main content ?>
		 <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	    	<script type="text/javascript">
	    		google.load('jquery', '1');
	    	</script>
		  <script>
		  	$(function(){
		  			//console.log("JQuery Loaded!!");
		  	});//END Doc Ready
		  </script>
	</body>
</html>
