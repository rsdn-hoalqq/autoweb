<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo e(asset('/js/templateEditor/ckeditor/ckeditor.js')); ?>"></script>
	<script type="text/javascript">
		var baseUrl = "<?php echo e(asset('/')); ?>";
	</script>
	
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>  
	<nav class="navbar navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo e(route('admin')); ?>">Admin Manager</a>
	    </div>
	    <ul class="nav navbar-nav">
	      
	      <li><a href="<?php echo e(route('categoryList')); ?>">Categories</a></li>
	      <li><a href="<?php echo e(route('trangchu')); ?>">Products</a></li>
	      <li><a href="<?php echo e(route('trangchu')); ?>">Images</a></li>
	      <li><a href="<?php echo e(route('trangchu')); ?>">Videos</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
			<?php if(Auth::guest()): ?>
				<li><a href="<?php echo e(url('/auth/login')); ?>">Login</a></li>
				<li><a href="<?php echo e(url('/auth/register')); ?>">Register</a></li>
			<?php else: ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo e(url('/auth/logout')); ?>">Logout</a></li>
					</ul>
				</li>
			<?php endif; ?>
		</ul>
	  </div>
	</nav>
	<div class="container">		
		<div class="row">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('/js/myscript.js')); ?>"></script>
</body>
</html>
