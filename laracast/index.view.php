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
		<h1>Personal Data </h1>
		<?php foreach($person as $key => $feature) : ?>
			<li><strong><?= $key ?></strong><?= $feature ?></li>
		<?php endforeach; ?>

	</header>
</body>
</html>