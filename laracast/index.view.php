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

		.little-space-left
		{
			margin-left :20px;
		}
	</style>
</head>
<body>
	<header>
		<h1>Task List </h1>
	</header>
	<ul class="list-style: none;">
		<li>
			<strong>Title : </strong>
			<span class="little-space-left"><?= $task["title"] ?></span>
		</li>
		<li>
			<strong>Due : </strong>
			<span class="little-space-left"><?= $task["due"]?></span>
		</li>
		<li>
			<strong>Assignet To : </strong>
			<span class="little-space-left"><?= $task["assigned_to"]?></span>
		</li>
		<li>
			<strong>Status : </strong>
			<span class="little-space-left"><?= $task["completed"] ? 'Complete' : 'Incomplete' ?></span>
		</li>
		
	</ul>
	
</body>
</html>