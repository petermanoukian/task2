<!doctype html>
<html>
<head>

<link href="<?php echo e(asset('/css/css.css')); ?>" rel="stylesheet">


<meta charset="utf-8">



<title>Task 1</title>
</head>

<body>
<div class='full'> <h2>main layout</h2> </div>

	<div class='full'>
		<nav>
		<a href = '/service'> &rsaquo; Services </a> 
 
		<a href = '/account'> &rsaquo; Accounts </a>
		</nav>
	</div>

<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
