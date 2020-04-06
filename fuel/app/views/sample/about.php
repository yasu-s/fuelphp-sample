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
			<h2>Sample about</h2>
			<div class="col-md-4">
				<ul>
					<li>
						<?php echo Html::anchor(Router::get('sample'), 'sample'); ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
		<div class="col-md-4">
			<p>memo: <?php echo $memo; ?></p>
		</div>
	</div>
</body>
</html>
