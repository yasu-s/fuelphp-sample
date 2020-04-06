<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP sample</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li>
						<?php echo Html::anchor(Router::get('welcome/index'), 'welcome'); ?>
					</li>
					<li>
						<?php echo Html::anchor(Router::get('hello'), 'welcome/hello'); ?>
					</li>
					<li>
						<?php echo Html::anchor(Router::get('hello_param', array('name' => 'aa')), 'welcome/hello/param'); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
