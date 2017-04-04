<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/css/theme.css">
	<link rel="stylesheet" href="/css/vendor.css">
	<link rel="stylesheet" href="/css/styles.css">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

	<script src="/js/vendor.js"></script>
	<script src="/js/scripts.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
	    
	<?php echo $content; ?>

</div>

</body>
</html>
