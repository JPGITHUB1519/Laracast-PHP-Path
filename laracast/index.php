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
		<h1>
			<?php 
				// $_GET -> Dictionary with the variables passed on get
				// html specialChars to avoid code injections and take only string
				echo "Hello " . htmlspecialchars($_GET["name"]);
			?>
		</h1>
		<!-- shorthand  -->
		<h2><?= "Your age is " . $_GET["age"] ?></h2>
	</header>
</body>
</html>