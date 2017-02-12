<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		header
		{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<!-- dirty way -->
		<!-- <ul>
			<?php
				/*
				foreach($names as $value)
				{
					echo "<li>$value</li>";
				}
				*/
			?>
		</ul> -->
		<h1>Friends</h1>
		<?php foreach($names as $name): ?>
			<li><?= $name ?></li>
		<?php endforeach; ?>

		<h1>Favorite Animals</h1>
		<?php foreach($animals as $animal): ?>
			<li><?php echo $animal ?></li>
		<?php endforeach; ?>
	</header>
</body>
</html>